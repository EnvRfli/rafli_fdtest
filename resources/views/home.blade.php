@extends('layouts.guestlayout')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold text-blue-700 mb-4">Featured Books</h2>

    <!-- Filter Form -->
    <form action="{{ route('home') }}" method="GET" class="mb-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                <input type="text" name="author" id="author" value="{{ request('author') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-1">
            </div>
            <div>
                <label for="uploaded_at" class="block text-sm font-medium text-gray-700">Date Uploaded</label>
                <input type="date" name="uploaded_at" id="uploaded_at" value="{{ request('uploaded_at') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-1">
            </div>
            <div>
                <label for="rating" class="block text-sm font-medium text-gray-700">Rating ">="</label>
                <input type="number" step="0.1" name="rating" id="rating" value="{{ request('rating') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-1">
            </div>
        </div>
        <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">Filter</button>
    </form>

    <!-- Book List -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
        @foreach ($books as $book)
        <a href="{{ route('book.details', $book->id) }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <img src="{{ $book->cover_image ? asset('storage/' . $book->cover_image) : 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg' }}" 
     alt="{{ $book->title }}" 
     class="w-full h-48 object-cover mb-4 rounded-md">
                   <h2 class="text-xl font-semibold text-blue-700">{{ $book->title }}</h2>
            <p class="text-gray-600">Author: {{ $book->author }}</p>
            <p class="text-gray-600">Description: {{ Str::limit($book->description, 100) }}</p>
            <p class="text-gray-600">Rating: {{ $book->rating }}</p>
            <p class="text-gray-600">Uploaded At: {{ $book->created_at->format('d-m-Y') }}

            </p>
        </a>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $books->links() }}
    </div>
</div>
@endsection