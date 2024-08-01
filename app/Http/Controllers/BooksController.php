<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all books
        $books = Book::all();

        return view('books.index', compact('books'));
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
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'image_book' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'genre' => 'required|string|max:255',
            'description' => 'required|string',
            'year_published' => 'required|integer',
            'copies_available' => 'required|integer',
        ]);

        // Handle file upload for image_book
        if ($request->hasFile('image_book')) {
            $validated['image_book'] = $request->file('image_book')->store('book_images', 'public');
        }

        // Add the current user's ID
        $validated['user_id'] = Auth::id();

        // Create and save the new book
        $book = new Book($validated);
        $book->save();

        // Redirect to the books index page with a success message
        return redirect()->route('books.index')->with('success', 'Book created successfully!');
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
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'image_book' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'genre' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'year_published' => 'required|integer',
            'copies_available' => 'required|integer',
        ]);

        // Retrieve the book by its ID
        $book = Book::findOrFail($id);

        // Update the book's attributes
        $book->title = $validated['title'];
        $book->author = $validated['author'];
        $book->genre = $validated['genre'];
        $book->description = $validated['description'];
        $book->year_published = $validated['year_published'];
        $book->copies_available = $validated['copies_available'];

        // Handle file upload for image_book if provided
        if ($request->hasFile('image_book')) {
            // Delete the old image if it exists
            if ($book->image_book) {
                Storage::disk('public')->delete($book->image_book);
            }
            // Store the new image and update the image_book attribute
            $book->image_book = $request->file('image_book')->store('book_images', 'public');
        }

        // Save the updated book
        $book->save();

        // Redirect to the books index page with a success message
        return redirect()->route('books.index')->with('success', 'Book updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }
}
