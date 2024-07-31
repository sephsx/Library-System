<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all books
        $books = Book::all();

        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create a new book
        return view('books.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'image_book' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'genre' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'year_published' => ['required', 'integer'],
            'copies_available' => ['required', 'integer'],
        ]);
    
        // Handle image upload if there is one
        if ($request->hasFile('image_book')) {
            $imagePath = $request->file('image_book')->store('book_images', 'public');
            $validated['image_book'] = $imagePath;
        } else {
            $validated['image_book'] = null;
        }
    
        // Create and save the book
        Book::create($validated);
    
        // Redirect to the books index with a success message
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
