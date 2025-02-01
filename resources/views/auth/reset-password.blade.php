<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 to-blue-700">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
            <h2 class="text-3xl font-extrabold text-center text-blue-600">Reset Password</h2>
            <p class="text-center text-gray-600 mb-6">Enter your new password below</p>
    
            <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
                @csrf
    
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
    
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-blue-700" />
                    <x-text-input id="email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="text-red-500 mt-1" />
                </div>
    
                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-blue-700" />
                    <x-text-input id="password" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="text-red-500 mt-1" />
                </div>
    
                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-blue-700" />
                    <x-text-input id="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-red-500 mt-1" />
                </div>
    
                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-200">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>    
</x-guest-layout>
