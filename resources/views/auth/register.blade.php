<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Full Name')" />
            <x-text-input id="name"
                class="mt-1 block w-full rounded-lg border-border-color focus:border-primary focus:ring-primary shadow-sm transition-colors"
                type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-1.5" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" />
            <x-text-input id="email"
                class="mt-1 block w-full rounded-lg border-border-color focus:border-primary focus:ring-primary shadow-sm transition-colors"
                type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password"
                class="mt-1 block w-full rounded-lg border-border-color focus:border-primary focus:ring-primary shadow-sm transition-colors"
                type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation"
                class="mt-1 block w-full rounded-lg border-border-color focus:border-primary focus:ring-primary shadow-sm transition-colors"
                type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5" />
        </div>

        <!-- Actions -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pt-2">
            <a href="{{ route('login') }}" class="text-sm text-primary hover:text-secondary hover:underline transition">
                {{ __('Already registered? Sign in') }}
            </a>

            <x-primary-button
                class="bg-primary hover:bg-secondary text-white shadow-md hover:shadow-lg transition-all duration-300 min-w-[140px]">
                {{ __('Register Admin') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
