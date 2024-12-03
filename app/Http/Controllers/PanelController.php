<?php

namespace App\Http\Controllers;

use App\Providers\BookServiceProvider;
use App\Providers\GenreServiceProvider;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Symfony\Component\HttpFoundation\Request;

class PanelController
{
    private BookServiceProvider $bookService;
    private GenreServiceProvider $genreService;

    public function __construct()
    {
        $this->bookService = new BookServiceProvider();
        $this->genreService = new GenreServiceProvider();
    }

    public function panel(Request $request): View|Factory|Application
    {
        return view('layouts.panel.panel');
    }

    public function addBook(Request $request): View|Factory|Application
    {
        $genreList = $this->genreService->readAll();
        return view('layouts.panel.add', ['genreList' => $genreList]);
    }

    public function editBook(Request $request, int $id): View|Factory|Application
    {
        $genreList = $this->genreService->readAll();
        $book = $this->bookService->read($id);
        return view('layouts.panel.edit', ['genreList' => $genreList, 'book' => $book]);
    }

    public function profile(Request $request): View|Factory|Application
    {
        return view('layouts.panel.profile');
    }
}
