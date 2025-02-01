@extends('layouts.guestlayout')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <!-- Tombol Kembali ke Home -->
    <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-700 mb-4 inline-block">
        &larr; Back to Home
    </a>

    <!-- Detail Buku -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Gambar Cover -->
        <div class="mb-4 md:mb-0 p-6 bg-white rounded-lg shadow-md">
            <img src={{ isset($book->cover_image) ? asset('storage/' . $book->cover_image) : 'https://t4.ftcdn.net/jpg/04/70/29/97/360_F_470299797_UD0eoVMMSUbHCcNJCdv2t8B2g1GVqYgs.jpg'}}
             alt="{{ $book->title }}" class="w-full h-auto rounded-md">
        </div>

        <!-- Informasi Buku -->
        <div>
            <h1 class="text-3xl font-bold text-blue-700 mb-4">{{ $book->title }}</h1>
            <p class="text-gray-600 mb-2"><span class="font-semibold">Author:</span> {{ $book->author }}</p>
            <p class="text-gray-600 mb-2"><span class="font-semibold">Rating:</span> {{ $book->rating }}</p>
            <p class="text-gray-600 mb-2"><span class="font-semibold">Uploaded At:</span> {{ $book->uploaded_at }}</p>
            <p class="text-gray-600 mb-4"><span class="font-semibold">Description:</span> {{ $book->description }}</p>
        </div>
    </div>
</div>
@endsection