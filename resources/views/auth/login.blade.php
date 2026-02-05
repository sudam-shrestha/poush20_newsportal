<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-center text-green-600 font-medium" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" />
            <x-text-input id="email"
                class="mt-1 block w-full rounded-lg border-border-color focus:border-primary focus:ring-primary shadow-sm transition-colors"
                type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password"
                class="mt-1 block w-full rounded-lg border-border-color focus:border-primary focus:ring-primary shadow-sm transition-colors"
                type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
        </div>

        <!-- Remember Me + Forgot Password -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-border-color text-primary shadow-sm focus:ring-primary" name="remember">
                <span class="ms-2 text-sm text-text opacity-90">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-primary hover:text-secondary hover:underline transition"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <x-primary-button
                class="w-full bg-primary hover:bg-secondary text-white shadow-md hover:shadow-lg transition-all duration-300">
                {{ __('Log in to Admin Panel') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Register link (optional but useful for admin context) -->
    @if (Route::has('register'))
        <p class="mt-6 text-center text-sm text-text opacity-80">
            Don't have an account yet?
            <a href="{{ route('register') }}" class="text-primary hover:text-secondary font-medium hover:underline">
                {{ __('Create one') }}
            </a>
        </p>
    @endif
</x-guest-layout>
