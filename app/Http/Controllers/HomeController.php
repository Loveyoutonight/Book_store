<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function authors(){
        $authors = Author::all();
        return view('home.authors', compact('authors'));
    }

    public function books(string $nickname){
        $author = Author::where('nickname', $nickname)->firstorfail();
        $books = $author->books()->get();
        return view('home.books', compact('books', 'author'));
    }
}
