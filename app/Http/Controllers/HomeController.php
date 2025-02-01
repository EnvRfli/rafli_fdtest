<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::query();

        // Filter by Author add a 
        if ($request->has('author') && !empty($request->author)) {
            $query->whereRaw('"author" ~* ?', [$request->author]);
        }             

        // Filter by Date Uploaded
        if ($request->has('date_uploaded') && $this->validateDate($request->date_uploaded)) {
            $query->whereDate('created_at', $request->date_uploaded);
        }

        // Filter by Rating
        if ($request->has('rating') && is_numeric($request->rating)) {
            $query->where('rating', '>=', (float) $request->rating);
        }

        // Pagination
        $books = $query->paginate(10);

        return view('home', compact('books'));
    }

    public function show($id)
    {
        // Ambil data buku berdasarkan ID
        $book = Book::findOrFail($id);

        // Tampilkan view book-details dengan data buku
        return view('book-details', compact('book'));
    }

    /**
     * Validate date format.
     *
     * @param string $date
     * @param string $format
     * @return bool
     */
    private function validateDate($date, $format = 'Y-m-d')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }
}