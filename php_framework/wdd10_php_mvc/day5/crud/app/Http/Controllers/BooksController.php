<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\CreateBookRequest;

class BooksController extends Controller
{

    public function __construct()
    {
        $this->middleware(['admin']);
    }
    
    public function index()
    {
        $books = Book::latest()->get();
        return view('books/index',['books' => $books]);
    }

    public function create()
    {
        return view('books/create');
    }

    public function store(CreateBookRequest $request)
    {

        $valid = $request->validated();

        if($request->file('image')) {
            $path =  $request->file('image')->store('public');
        }

        // Must give in_print a value
        $valid['image'] = basename($path ?? 'default.jpg') ;


        Book::create($valid);

        session()->flash('success', 'Book successfully created!');
        
        return redirect('/books');


    }

    /** 
     * Demonstrates Route Model Binding
     */
    public function edit(Book $book)
    {
        return view('books/edit', ['book' => $book]);
    }

    public function destroy(Request $request, $id)
    {
        $book = Book::find($id);
        if($book->delete()) {
            session()->flash('success', 'Book was deleted');
            return redirect('/books');
        }
        session()->flash('error', 'There was a problem deleting the book');
        return redirect('/books');
        
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'id' => 'required|integer',
            'title' => 'required|string|max:255',
            'year_published' => 'required|integer',
            'num_pages' => 'required|integer',
            'price' => 'required|numeric',
            'in_print' => 'in:yes,no',
            'image' => 'nullable|image'
        ]);

        if($request->file('image')) {
            $path = $request->file('image')->store('public');
        }

        $book = Book::find($valid['id']);

        $valid['image'] = basename($path ?? $book->image);
        $valid['in_print'] = $valid['in_print'] ?? 0;
        
        // $book->title = $valid['title'];
        // $book->year_published = $valid['year_published'];
        // $book->num_pages = $valid['num_pages'];
        // $book->in_print = $valid['in_print'] ?? 0;
        // $book->price = $valid['price'];
        $book->update($valid);

        if($book->save()) {
            session()->flash('success', 'Book was successfully updated'); 
        } else {
            session()->flash('error', 'There was a problem updating the book');
        }
        return redirect('/books');

    }
}
