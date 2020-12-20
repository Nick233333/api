<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    public function show(Book $book)
    {
        return new BookResource($book);
    }

    public function myLike()
    {
        return BookResource::collection(Book::where('is_like', 1)->paginate(10));
    }

}
