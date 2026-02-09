<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->get();
        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|max:255",
            "author" => "required|max:255",
            "image" => "required|image|mimes:jpg,jpeg,png,svg,gif,webp,avif|max:1024",
            "description" => "required",
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->author = $request->author;
        $article->description = $request->description;
        $article->meta_keywords = $request->meta_keywords;
        $article->meta_description = $request->meta_description;

        // $file = $request->image;
        // if ($file) {
        //     $file_name = time() . "." . $file->getClientOriginalExtension(); //12346543.jpg
        //     $file->move("images", $file_name);
        //     $article->image = "images/$file_name";
        // }
        if ($request->image) {
            $article->image = upload_image($request->image);
        }
        $article->save();
        $article->categories()->attach($request->categories);
        toast("Article created successfully", "success");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        $categories = Category::all();
        return view('admin.article.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "title" => "required|max:255",
            "status" => "required",
            "author" => "required|max:255",
            "image" => "nullable|image|mimes:jpg,jpeg,png,svg,gif,webp,avif|max:1024",
            "description" => "required",
        ]);

        $article = Article::find($id);
        $article->title = $request->title;
        $article->author = $request->author;
        $article->status = $request->status;
        $article->description = $request->description;
        $article->meta_keywords = $request->meta_keywords;
        $article->meta_description = $request->meta_description;
        // $file = $request->image;
        // if ($file) {
        //     $file_name = time() . Auth::user()->id . "." . $file->getClientOriginalExtension(); //12346543.jpg
        //     $file->move("images", $file_name);
        //     $article->image = "images/$file_name";
        // }

        if ($request->image) {
            $article->image = upload_image($request->image);
        }

        $article->save();
        $article->categories()->sync($request->categories);
        toast("Article updated successfully", "success");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $article->delete();
        toast("Article updated successfully", "success");
        return redirect()->back();
    }
}
