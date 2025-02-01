<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    // HomePage
    public function index()
    {
        $user = Auth::user();
        $emailVerified = $user->email_verified_at !== null;

        return view('dashboard.home', compact('user', 'emailVerified'));
    }

    // UserList
    public function userList(Request $request)
    {
        $query = User::query();

        // Filter by email verification status
        if ($request->has('email_verified')) {
            if ($request->email_verified === 'verified') {
                $query->whereNotNull('email_verified_at');
            } elseif ($request->email_verified === 'unverified') {
                $query->whereNull('email_verified_at');
            }
        }

        // Search by name or email
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%');
            });
        }

        $users = $query->paginate(10);

        return view('dashboard.user-list', compact('users'));
    }

    // BookManagement - Index
    public function bookManagement()
    {
        $books = Book::where('user_id', Auth::id())->paginate(10);
        return view('dashboard.book-management', compact('books'));
    }

    // BookManagement - Add Book
    public function addBook(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'description' => 'required|string',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi file gambar
        'rating' => 'required|numeric|min:1|max:5',
    ]);

    // Handle file upload
    $coverImagePath = null;
    if ($request->hasFile('cover_image')) {
        $coverImagePath = $request->file('cover_image')->store('covers', 'public'); // Simpan file di folder 'covers'
    }

    Book::create([
        'user_id' => Auth::id(),
        'title' => $request->title,
        'author' => $request->author,
        'description' => $request->description,
        'cover_image' => $coverImagePath, // Simpan path file
        'rating' => $request->rating,
    ]);

    return redirect()->route('dashboard.book-management')->with('success', 'Book added successfully!');
}

    public function editBook($id)
    {
        $book = Book::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('dashboard.edit-book', compact('book'));
    }

    // BookManagement - Update Book
    public function updateBook(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'description' => 'required|string',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi file gambar
        'rating' => 'required|numeric|min:1|max:5',
    ]);

    $book = Book::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

    // Handle file upload
    $coverImagePath = $book->cover_image; // Simpan path lama
    if ($request->hasFile('cover_image')) {
        // Hapus file lama jika ada
        if ($book->cover_image && Storage::disk('public')->exists($book->cover_image)) {
            Storage::disk('public')->delete($book->cover_image);
        }
        // Simpan file baru
        $coverImagePath = $request->file('cover_image')->store('covers', 'public');
    }

    $book->update([
        'title' => $request->title,
        'author' => $request->author,
        'description' => $request->description,
        'cover_image' => $coverImagePath, // Update path file
        'rating' => $request->rating,
    ]);

    return redirect()->route('dashboard.book-management')->with('success', 'Book updated successfully!');
}

    // BookManagement - Delete Book
    public function deleteBook($id)
{
    $book = Book::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

    // Hapus file gambar jika ada
    if ($book->cover_image && Storage::disk('public')->exists($book->cover_image)) {
        Storage::disk('public')->delete($book->cover_image);
    }

    $book->delete();

    return redirect()->route('dashboard.book-management')->with('success', 'Book deleted successfully!');
}
}