<x-frontend-layout title="Home"
    description="CodeIT News delivers the latest technology, education, programming, and IT industry updates. Stay informed with reliable news, trends, and insights from Nepal and beyond."
    keywords="CodeIT News, Code IT Nepal, tech news Nepal, technology news, IT news Nepal, programming news, coding updates, software news, web development news, app development news, cybersecurity news, AI news, digital trends, tech education, IT students Nepal, coding tutorials news, startup news Nepal, innovation news, developer community Nepal
"
    image="{{ asset('frontend/images/logo.png') }}">

    <section class="py-10">
        <div class="container grid md:grid-cols-3 gap-6">
            <div class="md:col-span-2 shadow bg-white p-4 rounded-md overflow-hidden">
                <a href="{{ route('article', $latest->id) }}">
                    <img class="w-full" src="{{ asset($latest->image) }}" alt="{{ $latest->title }}">
                    <div>
                        <h1 class="text-3xl mt-2">
                            {{ $latest->title }}
                        </h1>
                        <div class="line-clamp-2">
                            {!! $latest->description !!}
                        </div>
                    </div>
                </a>
            </div>

            <div class="space-y-4">
                <h2
                    class="text-2xl text-(--primary-color) p-3 bg-(--primary-color)/20 border-l-4 border-(--primary-color)">
                    Most Viewed</h2>

                @foreach ($most_views as $most)
                    <div>
                        <a href="{{ route('article', $most->id) }}" class="grid grid-cols-3 items-center gap-2 bg-white p-2 rounded-md">
                            <img class="w-full h-[120px] object-cover" src="{{ asset($most->image) }}"
                                alt="{{ $most->title }}">
                            <div class="col-span-2">
                                <h3 class="line-clamp-1 text-lg font-bold">
                                    {{ $most->title }}
                                </h3>
                                <div class="line-clamp-2">
                                    {!! $most->description !!}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="py-10">
        <div class="container space-y-10">
            @foreach ($categories as $category)
                @if (count($category->articles) > 0)
                    <div>
                        <h2
                            class="text-2xl text-(--primary-color) p-3 bg-(--primary-color)/20 border-l-4 border-(--primary-color)">
                            {{ $category->title }}</h2>

                        <div class="grid grid-cols-3 gap-4 mt-4">
                            @foreach ($category->articles as $i => $article)
                                <div data-aos="fade-up"  data-aos-duration="{{++$i}}00">
                                    <a href="{{ route('article', $article->id) }}"
                                        class="grid grid-cols-3 items-center gap-2 bg-white p-2 rounded-md">
                                        <img class="w-full h-[120px] object-cover" src="{{ asset($article->image) }}"
                                            alt="{{ $article->title }}">
                                        <div class="col-span-2">
                                            <h3 class="line-clamp-1 text-lg font-bold">
                                                {{ $article->title }}
                                            </h3>
                                            <div class="line-clamp-2">
                                                {!! $article->description !!}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    @foreach ($home_advertises as $ad)
                        <div>
                            <a href="{{ $ad->redirect_url }}" target="_blank">
                                <img class="h-14 md:h-20" src="{{ asset($ad->image) }}" alt="">
                            </a>
                        </div>
                    @endforeach
                @endif
            @endforeach
        </div>
    </section>

</x-frontend-layout>
