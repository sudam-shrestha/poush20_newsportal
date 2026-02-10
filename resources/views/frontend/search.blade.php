<x-frontend-layout>

    <section class="py-10">
        <div class="container grid grid-cols-3 gap-8">
            <div class="col-span-2 space-y-4">
                <h1
                    class="text-2xl text-(--primary-color) p-3 bg-(--primary-color)/20 border-l-4 border-(--primary-color)">
                    Search Result for {{ $request->q }}</h1>

                @foreach ($articles as $article)
                    <div>
                        <a href="{{ route('article', $article->id) }}"
                            class="grid grid-cols-3 items-center gap-2 bg-white p-2 rounded-md">
                            <img class="w-full h-[160px] object-cover" src="{{ asset($article->image) }}"
                                alt="{{ $article->title }}">
                            <div class="col-span-2">
                                <h3 class="line-clamp-1 text-lg font-bold">
                                    {{ $article->title }}
                                </h3>
                                <div class="line-clamp-2">
                                    {!! $article->description !!}
                                </div>
                                <div class="text-sm mt-2">
                                    <span>Published Date: {{ toNepaliDate($article->created_at) }}</span> |
                                    <span>Total Viewed By: {{ $article->views }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div>
                @foreach ($other_advertises as $ad)
                    <a href="{{ $ad->redirect_url }}" target="_blank">
                        <img class="w-full" src="{{ asset($ad->image) }}" alt="">
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-frontend-layout>
