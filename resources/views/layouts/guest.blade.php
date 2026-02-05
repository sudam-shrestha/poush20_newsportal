<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin - {{ config('app.name', 'NewsPortal') }} | Register</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-bg text-text font-sans antialiased min-h-screen flex items-center justify-center p-4 md:p-6">

    <div class="w-full max-w-md lg:max-w-lg">

        <!-- Branding / Logo area -->
        <div class="text-center mb-8">
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight">
                <span class="text-primary">News</span><span class="text-secondary">Portal</span>
            </h1>
            <p class="mt-2 text-sm md:text-base opacity-80">Admin Panel Registration</p>
        </div>

        <!-- Form Card -->
        <div class="bg-card shadow-xl rounded-2xl overflow-hidden border border-border-color">
            <div class="px-8 py-10 md:px-12">

                {{ $slot }}

            </div>
            <!-- Accent bar -->
            <div class="h-1.5 bg-gradient-to-r from-primary to-secondary"></div>
        </div>

        <!-- Footer -->
        <p class="mt-6 text-center text-sm opacity-70">
            © {{ date('Y') }} NewsPortal Admin • All rights reserved
        </p>
    </div>

</body>

</html>
