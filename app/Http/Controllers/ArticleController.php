<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categories;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = Article::all();
        $categories = Categories::all();
        return view('article.index', compact('article', 'categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'article_name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|string|max:5000',
            'categories_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('article')
                ->withErrors($validator)
                ->withInput();
        }

        $article = new Article();
        $article->article_name = $request->input('article_name');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/article'), $imageName);
            $article->image = $imageName;
        }

        $article->description = $request->input('description');
        $article->categories_id = $request->input('categories_id');
        $article->save();

        return redirect()->route('article');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article,string $id)
    {
        // dd('oke');
        $validator = Validator::make($request->all(), [
            'article_name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|string|max:5000',
            'categories_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('article')
                ->withErrors($validator)
                ->withInput();
        }

        $article = Article::findOrFail($id);
        $article->article_name = $request->input('article_name');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/article'), $imageName);
            $article->image = $imageName;
        }

        $article->description = $request->input('description');
        $article->categories_id = $request->input('categories_id');
        $article->update();

        return redirect()->route('article');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd('oke');
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('article');
    }
}
