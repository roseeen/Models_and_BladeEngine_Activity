<?php

namespace App\Http\Controllers;

use App\Models\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
}
