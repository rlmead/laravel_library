<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;

class BooksController extends Controller
{
    public function index()
    {
        return Book::get();
    }

    public function show($id)
    {
        return Book::findOrFail($id);
    }
}
