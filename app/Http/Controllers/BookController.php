<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function create(){
        $hello = 'سلام';
        $books = Book::all();
        return view('create_book', compact('hello', 'books'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|min:4|max:60',
            'author' => 'required|string|min:4|max:60',
            'publisher' => 'required|string|min:4|max:60',
            'genre' => 'required|string|min:4|max:60',


        ]);
        Book::query()->create($data);

        return redirect()->route('create.book');
    }
}
