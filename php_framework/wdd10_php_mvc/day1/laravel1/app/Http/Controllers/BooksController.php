<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    
    /** 
     * List view of books
     */
    public function home() {
        $title = 'Some Title';
        $tagline = 'Some tagline';
        return view('home', compact('title', 'tagline'));
    }

    /** 
     * Show book detail
     */
    public function show() {
        $title = 'Some title';
        $tagline = 'Some tagline';
        return view('books/show', compact('genre', 'slug'));
    }

    /** 
     * Form to create a new book
     */
    public function create() {

    }

    /** 
     * Save the book in the database
     */
    public function store() {

    }

    /** 
     * Form to edit an existing book
     */
    public function edit($book) {

    }

    /**
     * Save the updated book information
     */
    public function update(Request $request)
    {

    }

    /**
     * Delete a book
     */
    public function destroy($book)
    {

    }
}
