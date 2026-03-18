<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="mx-12 md:mx-auto text-left max-w-prose p-6 bg-white/30 shadow-sm border border-gray-100/50 m-12 md:my-12 md:p-12">
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input 
                    id="email" 
                    class="w-full !border-konablack focus:!border-konablack-500 !ring-0 transition py-3 px-2 !border-2 !rounded-none !opacity-100 !shadow-none" 
                    type="email" 
                    name="email" :value="old('email')" 
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input 
                    id="password" 
                    class="w-full border-konablack focus:border-konablack-500 focus:ring-0 transition py-3 px-2 border-2 rounded-none"
                    type="password"
                    name="password"
                    required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center inline-flex mt-4">
                <x-primary-button class="mr-3">
                    {{ __('Log in') }}
                </x-primary-button>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                
            </div>
        </form>
    </div>
</x-guest-layout>
