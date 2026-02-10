<x-frontend-layout :title="$article->title" :description="$article->meta_description" :keywords="$article->meta_keywords" :image="asset($article->image)">

    <section class="py-10">
        <div class="container grid grid-cols-3 gap-8">
            <div class="col-span-2 space-y-4">
                <div class="text-sm mt-2">
                    <span>Published Date: {{ toNepaliDate($article->created_at) }}</span> |
                    <span>Total Viewed By: {{ $article->views }}</span> |
                    <span>Author: {{ $article->author }}</span>
                </div>
                <img class="w-full" src="{{ asset($article->image) }}" alt="{{ $article->title }}">
                <h1 class="text-3xl font-bold">
                    {{ $article->title }}
                </h1>
                <div>
                    {!! $article->description !!}
                </div>

                <div class="fb-comments" data-href="{{ route('article', $article->id) }}" data-width=""
                    data-numposts="5">
                </div>
            </div>

            <div>
                @foreach ($other_advertises as $ad)
                    <a href="{{ $ad->redirect_url }}" target="_blank">
                        <img class="w-full" src="{{ asset($ad->image) }}" alt="">
                    </a>
                @endforeach

                <div class="fb-page" data-href="https://www.facebook.com/sudam.shrestha.98" data-tabs="timeline"
                    data-width="" data-height="" data-small-header="false" data-adapt-container-width="true"
                    data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/sudam.shrestha.98" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/sudam.shrestha.98">Sudam Shrestha</a></blockquote>
                </div>
            </div>
        </div>
    </section>

</x-frontend-layout>
