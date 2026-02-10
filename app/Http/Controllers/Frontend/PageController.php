<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{

    public function __construct()
    {
        $header_advertise = Advertise::where("expire_date", ">=", now())->where('ad_position', 'header')->latest()->first();
        $categories = Category::orderBy('position', 'asc')->where('status', true)->get();
        View::share([
            'header_advertise' => $header_advertise,
            'categories' => $categories
        ]);
    }

    public function home()
    {
        $latest = Article::where('status', true)->latest()->first();
        $most_views = Article::where('status', true)->orderBy('views', 'desc')->take(4)->get();
        $home_advertises = Advertise::where("expire_date", ">=", now())->where('ad_position', 'home_page')->latest()->get();
        return view('frontend.home', compact('latest', 'most_views', 'home_advertises'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->where('status', true)->first();
        if (!$category) {
            abort(404);
        }
        $other_advertises = Advertise::where("expire_date", ">=", now())->where('ad_position', 'other_page')->latest()->get();

        return view('frontend.category', compact('category', 'other_advertises'));
    }

    public function article($id)
    {
        $article = Article::where('id', $id)->where('status', true)->first();

        if (!$article) {
            abort(404);
        }

        // $article->views = $article->views + 1;
        // $article->save();

        $article->increment('views');

        $other_advertises = Advertise::where("expire_date", ">=", now())->where('ad_position', 'other_page')->latest()->get();

        return view('frontend.article', compact('article', 'other_advertises'));
    }


    public function search(Request $request)
    {
        $articles = Article::where('title', 'like', "%$request->q%")->where('status', true)->get();

        $other_advertises = Advertise::where("expire_date", ">=", now())->where('ad_position', 'other_page')->latest()->get();
        return view('frontend.search', compact('articles', 'other_advertises', 'request'));
    }
}
