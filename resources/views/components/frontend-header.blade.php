<header class="bg-(--bg-color)">
    <div class="container py-6 mx-auto flex flex-col md:flex-row justify-between items-center">
        <div>
            <img class="h-14 md:h-20" src="{{ asset('frontend/images/logo.png') }}" alt="Jawaaf Logo">
        </div>
        @if ($header_advertise)
            <div>
                <a href="{{ $header_advertise->redirect_url }}" target="_blank">
                    <img class="h-14 md:h-20" src="{{ asset($header_advertise->image) }}" alt="">
                </a>
            </div>
        @endif
        <div>
            <span class="text-base md:text-xl">
                {{ toNepaliDate(now()) }}
            </span>
            <img class="h-3 md:h-4" src="{{ asset('frontend/images/line.png') }}" alt="Line">
        </div>
    </div>

    <nav class="bg-(--primary-color) text-white py-2">
        <div class="container flex justify-between items-center">
            <div class="hidden lg:flex gap-6 text-xl">
                <a href="{{ route('home') }}">गृहपृष्ठ</a>
                @foreach ($categories as $category)
                    <a href="{{ route('category', $category->slug) }}">{{ $category->title }}</a>
                @endforeach
            </div>
            <div class="lg:hidden">
                Menu
            </div>
            <div class="lg:hidden">
                <button class="text-xl" type="button" data-drawer-target="navbar-drawer"
                    data-drawer-show="navbar-drawer" aria-controls="navbar-drawer">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <div class="fixed bottom-1 left-0 right-0 lg:static">
                <form class="w-full lg:max-w-md mx-auto">
                    <label for="search" class="block mb-2.5 text-sm font-medium text-heading sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="search"
                            class="block w-full p-3 ps-9 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-(--primary-color) focus:border-(--primary-color) shadow-xs placeholder:text-body"
                            placeholder="Search" required />
                        <button type="button"
                            class="absolute end-1.5 bottom-1.5 text-white bg-(--primary-color)/90 hover:bg-(--primary-color) box-border border border-transparent focus:ring-4 focus:ring-(--primary-color)/50 shadow-xs font-medium leading-5 rounded text-xs px-3 py-1.5 focus:outline-none">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</header>


<div id="navbar-drawer"
    class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-neutral-primary-soft w-96 border-e border-default"
    tabindex="-1" aria-labelledby="drawer-label">
    <div class="border-b border-default pb-4 mb-5 flex items-center">
        <h5 id="drawer-label" class="inline-flex items-center text-lg font-medium text-body">
            <svg class="w-5 h-5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            Categories
        </h5>
        <button type="button" data-drawer-hide="navbar-drawer" aria-controls="navbar-drawer"
            class="text-body bg-transparent hover:text-heading hover:bg-neutral-tertiary rounded-base w-9 h-9 absolute top-2.5 end-2.5 flex items-center justify-center">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18 17.94 6M18 18 6.06 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
    </div>
    <div class="text-xl flex flex-col gap-6 text-(--primary-color)">
        <a href="{{ route('home') }}">गृहपृष्ठ</a>
        @foreach ($categories as $category)
            <a href="">{{ $category->title }}</a>
        @endforeach
    </div>
</div>
