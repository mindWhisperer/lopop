<?php

namespace App\Http\Controllers;

use App\Providers\BookServiceProvider;
use Symfony\Component\HttpFoundation\Request;

class EndpointController
{
    private BookServiceProvider $bookProvider;

    public function __construct()
    {
        $this->bookProvider = app(BookServiceProvider::class);
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

    public function login(string $email, string $password): array
    {
        $success = $this->checkPassword(password: $password);

        return [$email, $password, $success];
    }

    public function logout(): array
    {
        return [];
    }

    public function checkPassword(string $password): array
    {
        return [$password];
    }

}
