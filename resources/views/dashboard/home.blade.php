@extends('layouts.app')

@section('content')

<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-blue-700 mb-4">Welcome, {{ Auth::user()->name }}!</h1>

    <div class="space-y-4">
        <p><span class="font-semibold">Email:</span> {{ Auth::user()->email }}</p>
        <p><span class="font-semibold">Email Verification Status:</span> 
            {{ Auth::user()->email_verified_at !== null ? 'Verified' : 'Not Verified' }}
        </p>
        @if(Auth::user()->email_verified_at === null)
            <p class="text-red-500">Please verify your email address to access all features.</p>
            <div class="mt-4"></div>
            <a href="/verify-email" class="bg-blue-500 text-white px-4 py-2 rounded-md">Verify Email</a>
        @endif
    </div>
</div>
@endsection