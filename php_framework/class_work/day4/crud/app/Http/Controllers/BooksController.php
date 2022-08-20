<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $title = "Books";
        $books = Book::latest()->get();
        return view('books/index', compact('title', 'books'));
    }

    public function create()
    {
        return view('books/create');
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|string|max:255',
            'year_published' => 'required|integer',
            'num_pages' => 'required|integer',
            'price' => 'required|numeric',
            'in_print' => 'integer'
        ]);
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if ($book->delete()) {
            session()->flash('success', 'Delete done');
            return redirect('/books');
        }
        session()->flash('error', 'No thyu!');
    }
}
