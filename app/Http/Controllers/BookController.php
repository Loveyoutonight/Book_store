<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'price' => 'required',
            'pushlisher' => 'required',
            'nickname' => 'required',
        ]);
        $input = $request->all();
        Book::create($input);
        return redirect()->route('books.index')->with('success', 'Book create successful');
    }

    public function edit(int $book_id)
    {
        $authors = Author::all();
        $book = Book::findOrFail($book_id);
        return view('books.edit', compact('authors', 'book'));
    }

    public function update(Request $request, int $book_id){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'price' => 'required',
            'pushlisher' => 'required',
            'nickname' => 'required',
        ]);
        $input = $request->all();
        $book = Book::findOrFail($book_id);
        if($book){
            $book->update($input);
            return redirect()->route('books.index')->with('success', 'Book Updated successful');
        }else {
            return redirect()->route('books.index')->with('success', 'No Such Book Id Found');
        }
    }

    public function show(int $book) {
        $book = Book::findOrFail($book);
        return view('books.show', compact('book'));
    }

    public function destroy(int $book){
        Book::findOrFail($book)->delete();
        return redirect()->route('books.index')->with('success', 'Book Delete successful');
    }

}   
