<?php

namespace App\Http\Controllers;

use App\Models\Models\MyBook;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = MyBook::all();
        return view('books.index', compact('books'));
    }
}
