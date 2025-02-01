<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 to-blue-700">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
    <div class="mb-4 text-sm text-blue-600">
        {{ __('Thanks for signing up! Verify your account by clicking button below') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A verification link has been sent to the email address you provided during registration. Please check your Email/Spam') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <!-- Form untuk Mengirim Ulang Email Verifikasi -->
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{ __('Send Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <!-- Form untuk Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-blue-600 hover:text-blue-800 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
        </div>
    </div>
</x-guest-layout>