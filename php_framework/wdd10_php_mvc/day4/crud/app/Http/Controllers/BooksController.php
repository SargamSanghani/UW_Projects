<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();
        return view('books/index',['books' => $books]);
    }

    public function create()
    {
        return view('books/create');
    }

    public function store(Request $request)
    {
        // dd($request->input('title')); // get one field
        // dd($request->input()); // get all fields

        $valid = $request->validate([
            'title' => 'required|string|max:255',
            'year_published' => 'required|integer',
            'num_pages' => 'required|integer',
            'price' => 'required|numeric',
            'in_print' => 'integer'
        ]);

        // Must give in_print a value
        $valid['in_print'] = $valid['in_print'] ?? 0;

        Book::create($valid);

        session()->flash('success', 'Book successfully created!');
        
        return redirect('/books');


    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if($book->delete()) {
            session()->flash('success', 'Book was deleted');
            return redirect('/books');
        }
        session()->flash('error', 'There was a problem deleting the book');
        return redirect('/books');
        
    }
}
