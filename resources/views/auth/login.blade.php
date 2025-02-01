<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 to-blue-700">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
            <h2 class="text-3xl font-extrabold text-center text-blue-600">Welcome Back</h2>
            <p class="text-center text-gray-600 mb-6">Please log in to continue</p>
            
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
    
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
    
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-blue-700" />
                    <x-text-input id="email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="text-red-500 mt-1" />
                </div>
    
                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-blue-700" />
                    <x-text-input id="password" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="text-red-500 mt-1" />
                </div>
    
                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-400" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-500 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>
    
                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-200">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>

            <div class="mt-4 text-center">
                <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Don't have an account?</a>
            </div>
        </div>
    </div>
</x-guest-layout>