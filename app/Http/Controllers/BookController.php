<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    public function show($id)
    {
        return new BookResource(Book::findOrFail($id));
    }

    public function index()
    {

    }
}
