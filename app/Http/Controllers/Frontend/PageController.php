<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
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
        return view('frontend.home');
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->where('status', true)->first();
        if (!$category) {
            abort(404);
        }
        return view('frontend.category', compact('category'));
    }
}
