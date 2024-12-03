<?php

namespace App\Http\Controllers;

use App\Helpers\Constants;
use App\Providers\AuthService;
use App\Providers\BookServiceProvider;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class EndpointController
{
    private readonly BookServiceProvider $bookProvider;
    private readonly \Illuminate\Database\Query\Builder $table;

    public function __construct()
    {
        $this->bookProvider = app(BookServiceProvider::class);
        $this->table = DB::table('users');
    }

    public function getAll(): \Illuminate\Support\Collection|array
    {
        return $this->bookProvider->readAll() ?? [];
    }

    public function get($id)
    {
        return $this->bookProvider->read(id: $id) ?? [];
    }

    /**
     * @param Request $request
     *
     * @return array
     */
    public function create(Request $request): array
    {
        return $request->get('data');
        //$success = $this->bookProvider->create(data: $data);
        //return [$success];
    }

    /**
     * @param Request $request
     * @param string $id
     *
     * @return array
     */
    public function update(Request $request, string $id): array
    {
        $data = json_decode($request->get('data'));
        $success = $this->bookProvider->update(id: $id, data: $data);
        return [$success];
    }

    /**
     * @param string $id
     *
     * @return array
     */
    public function delete(string $id): array
    {
        $success = $this->bookProvider->delete(id: $id);
        return [$success];
    }

    public function register(string $email, string $password): array
    {
        return [];
    }

    public function login(Request $request)
    {

        $data = $request->get('data');

        $email = $data["email"];
        $password = $data["password"];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return [
                "code" => 401,
                "errors" => [['email', 'Nesprávny tvar prihlasovacieho emailu.']],
                "success" => false,
            ];
        }
        if (empty($password) || strlen($password) < 3) {
            return [
                "code" => 401,
                "errors" => [['password', 'Heslo musí mať aspoň 3 znaky.']],
                "success" => false,
            ];
        }

        $user = $this->table->where('email', $email)->first();

        if (!$user) {
            return [
                "code" => 401,
                //"message" => "User not exist",
                "errors" => [['login', 'Nesprávne prihlasovacie údaje']],
                "success" => false,
            ];
        }

        /** @type AuthService $auth */
        $auth = app(AuthService::class);
        if (!$auth->validatePassword($password, $user->password)) {
            return [
                "code" => 401,
                "message" => "Invalid password",
                "errors" => [['login', 'Nesprávne prihlasovacie údaje']],
                "success" => false,
            ];
        }

        $token = $auth->createToken([
            "name" => $user->name,
            "email" => $user->email,
            //"role" => $user->role,
            "role" => 9,
        ]);

        return response([
            "code" => 200,
            "message" => "Login success",
            "success" => true,
            Constants::AUTH_NAME => $token,
        ], 200)
            ->header('Content-Type', 'application/json')
            // $name = null, $value = null, $minutes = 0, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null
            ->cookie(Constants::AUTH_NAME, $token, 3600, null, null, null,
                false, // bolo potrebné vypnúť httpOnly aby sa dali čítať cookies pomocou JS
                false, null);
    }

    public function logout()
    {
        return response([
            "code" => 200,
            "message" => "Logout success",
            "success" => true,
        ], 200)->cookie(Constants::AUTH_NAME, '', -1);
    }

    public function checkPassword(string $password): array
    {
        return [$password];
    }

}
