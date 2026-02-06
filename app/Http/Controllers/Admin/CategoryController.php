<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('position', 'asc')->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|max:255",
        ]);

        $position = Category::max("position");

        $category = new Category();
        $category->title = $request->title;
        $category->position = $position + 1;
        $category->slug = Str::slug($request->title);
        $category->meta_keywords = $request->meta_keywords;
        $category->meta_description = $request->meta_description;
        $category->save();
        toast("Category created successfully", "success");
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
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "title" => "required|max:255",
            "position" => "required|numeric",
            "status" => "required",
        ]);

        $category = Category::find($id);
        $category->title = $request->title;
        $category->position = $request->position;
        $category->status = $request->status;
        $category->slug = Str::slug($request->title);
        $category->meta_keywords = $request->meta_keywords;
        $category->meta_description = $request->meta_description;
        $category->save();
        toast("Category updated successfully", "success");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        toast("Category updated successfully", "success");
        return redirect()->back();
    }
}
