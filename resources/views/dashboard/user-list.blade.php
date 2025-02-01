@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-blue-700 mb-4">User List</h1>

    @if(Auth::user()->email_verified_at === null)
        <div class="bg-red-100 p-4 rounded-lg shadow-md">
            <p class="text-red-500">Please verify your email address to access all features.</p>
            <div class="mt-4"></div>
            <a href="/verify-email" class="bg-blue-500 text-white px-4 py-2 rounded-md">Verify Email</a>
        </div>
    @else
    <!-- Filter and Search Form -->
    <form action="{{ route('dashboard.user-list') }}" method="GET" class="mb-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Filter by Email Verification -->
            <div>
                <label for="email_verified" class="block text-sm font-medium text-gray-700">Email Verification</label>
                <select name="email_verified" id="email_verified" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="">All</option>
                    <option value="verified" {{ request('email_verified') === 'verified' ? 'selected' : '' }}>Verified</option>
                    <option value="unverified" {{ request('email_verified') === 'unverified' ? 'selected' : '' }}>Unverified</option>
                </select>
            </div>

            <!-- Search by Name or Email -->
            <div>
                <label for="search" class="block text-sm font-medium text-gray-700">Search</label>
                <input type="text" name="search" id="search" value="{{ request('search') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            </div>

            <!-- Submit Button -->
            <div class="flex items-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Apply Filters</button>
            </div>
        </div>
    </form>

    <!-- User List -->
    <div class="space-y-4">
        @foreach ($users as $user)
            <div class="bg-blue-100 p-4 rounded-lg shadow-md">
                <p><span class="font-semibold">Name:</span> {{ $user->name }}</p>
                <p><span class="font-semibold">Email:</span> {{ $user->email }}</p>
                <p><span class="font-semibold">Email Verification:</span> 
                    {{ $user->email_verified_at !== null ? 'Verified' : 'Not Verified' }}
                </p>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $users->links() }}
    </div>
    @endif
</div>
@endsection