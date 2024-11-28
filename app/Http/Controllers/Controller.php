<?php

namespace App\Http\Controllers;

use App\Providers\BookServiceProvider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    private BookServiceProvider $bookService;

    public function __construct()
    {
        $this->bookService = new BookServiceProvider();
    }

    public function index():View
    {
        $newest = $this->bookService->lastThree();
        return view('index', ['books' => $newest]);
    }

    public function detail($id)
    {
        $book = $this->bookService->read($id);
        return view('detail', ['book' => $book]);
    }

    public function stalice()
    {
        $allBooks = $this->bookService->readAll();
        return view('stalice', ['books' => $allBooks]);
    }

}
