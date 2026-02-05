<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">

                    <!-- Profile Information Card -->
                    <div class="card shadow-sm mb-4 border-0">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">{{ __('Profile Information') }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">
                                {{ __("Update your account's profile information and email address.") }}
                            </p>

                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <!-- Update Password Card -->
                    <div class="card shadow-sm mb-4 border-0">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">{{ __('Update Password') }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">
                                {{ __('Ensure your account is using a long, random password to stay secure.') }}
                            </p>

                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <!-- Delete Account Card -->
                    {{-- <div class="card shadow-sm border-0">
                        <div class="card-header bg-light text-danger">
                            <h5 class="mb-0">{{ __('Delete Account') }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                            </p>

                            @include('profile.partials.delete-user-form')
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
