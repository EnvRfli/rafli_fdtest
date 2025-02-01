@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-blue-700 mb-4">Book Management</h1>

    @if(Auth::user()->email_verified_at === null)
        <div class="bg-red-100 text-red-500 p-4 rounded-lg shadow-md mb-4">
            Please verify your email address to access all features.
            <a href="/verify-email" class="bg-blue-500 text-white px-4 py-2 rounded-md">Verify Email</a>
        </div>
    @else
    <!-- Add Book Form -->
    <form action="{{ route('dashboard.book-management.add') }}" method="POST" class="mb-8" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>
            <div>
                <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                <input type="text" name="author" id="author" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
            </div>
            <div>
                <label for="cover_image" class="block text-sm font-medium text-gray-700">Cover Image</label>
                <input type="file" name="cover_image" id="cover_image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>
            <div>
                <label for="rating" class="block text-sm font-medium text-gray-700">Rating (1-5)</label>
                <input 
                    type="number" 
                    name="rating" 
                    id="rating" 
                    min="1" 
                    max="5" 
                    step="0.1"
                    required 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm appearance-none [-moz-appearance:_textfield]"
                >
                <style>
                    input[type="number"]::-webkit-outer-spin-button,
                    input[type="number"]::-webkit-inner-spin-button {
                        -webkit-appearance: none;
                        margin: 0;
                    }

                    input[type="number"] {
                        -moz-appearance: textfield;
                    }
                </style>
            </div>
        </div>
        <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md">Add Book</button>
    </form>

    <div class="text-xl font-semibold text-blue-700 mb-4">Your Book List</div>

    <div class="space-y-4">
        @foreach ($books as $book)
        <div class="flex items-center space-x-4 bg-white p-4 rounded-lg shadow-md">
            <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" class="w-24 h-32 object-cover rounded-lg">
            <div class="bg-blue-100 p-4 rounded-lg shadow-md flex-1">
                <p><span class="font-semibold">Title:</span> {{ $book->title }}</p>
                <p><span class="font-semibold">Author:</span> {{ $book->author }}</p>
                <p><span class="font-semibold">Description:</span> {{ $book->description }}</p>
                <p><span class="font-semibold">Rating:</span> {{ $book->rating }}</p>
                <p><span class="font-semibold">Uploaded At:</span> {{ $book->created_at }}</p>
                <div class="mt-2 flex space-x-2">
                    <!-- Tombol Edit -->
                    <a href="{{ route('dashboard.book-management.edit', $book->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md">Edit</a>
        
                    <!-- Tombol Delete -->
                    <form action="{{ route('dashboard.book-management.delete', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE') <!-- Method Spoofing untuk DELETE -->
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete</button>
                    </form>
                </div>
            </div>

        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $books->links() }}
    </div>
    @endif
</div>

@endsection