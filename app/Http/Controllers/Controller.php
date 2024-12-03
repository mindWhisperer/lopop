<?php

namespace App\Http\Controllers;

use App\Providers\BookServiceProvider;
use App\Providers\GenreServiceProvider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\View\View;

class Controller
{
    use AuthorizesRequests, ValidatesRequests;

    private BookServiceProvider $bookService;
    private GenreServiceProvider $genreService;

    public function __construct()
    {
        $this->bookService = new BookServiceProvider();
        $this->genreService = new GenreServiceProvider();
    }

    public function index(): View
    {
        $newest = $this->bookService->lastThree();
        return view('layouts.home', ['books' => $newest]);
    }

    public function detail($id)
    {
        $book = $this->bookService->read($id);
        return view('layouts.detail', ['book' => $book]);
    }

    public function bestOff()
    {
        $allBooks = $this->bookService->readAll();
        return view('layouts.bestoff', ['books' => $allBooks]);
    }

    public function addBook()
    {
        $genreList = $this->genreService->readAll();
        return view('layouts.panel.add', ['genreList' => $genreList]);
    }

    public function editBook(int $id)
    {
        $genreList = $this->genreService->readAll();
        $book = $this->bookService->read($id);
        return view('layouts.panel.edit', ['genreList' => $genreList, 'book' => $book]);
    }


    public function login()
    {
        return view('layouts.login');
    }

    public function logout()
    {
        // @todo Logout action
        return redirect()->route('login');
    }

    public function register()
    {
        return view('layouts.register');
    }
}
