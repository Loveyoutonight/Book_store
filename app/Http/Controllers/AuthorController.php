<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nickname' => 'required|unique:authors',
            'fullname' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:authors',
            'phone' => 'required',
        ]);
        $input = $request->all();
        Author::create($input);
        return redirect()->route('authors.index')->with('success', 'Author create successful');
    }

    public function show(string $nickname) {
        $author = Author::where('nickname', $nickname)->firstorfail();
        return view('authors.show', compact('author'));
    }

    public function edit(string $nickname) {
        $author = Author::where('nickname', $nickname)->firstorfail();    
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, string $nickname) {
        $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        $input = $request->all();
        Author::where('nickname', $nickname)->firstorfail()->update($input);    
        return redirect()->route('authors.index')->with('success', 'Author Updated successful');
    }

    public function destroy(string $nickname){
        Author::where('nickname', $nickname)->firstorfail()->delete();    
        return redirect()->route('authors.index')->with('success', 'Author Delete successful');
    }
}
