<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\LatestNews;
use App\Models\RecommendNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ManageContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function LatestNews()
    {
        $latest = LatestNews::all();
        $categories = Categories::all();
        return view('admin.components.latest-news.index', compact('latest', 'categories'));
    }

    public function RecommendNews()
    {
        $recommend = RecommendNews::all();
        $categories = Categories::all();
        return view('admin.components.recommend-news.index', compact('recommend', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeLatestNews(Request $request, $id)
    {
        LatestNews::create([
            'article_id' => $id,
        ]);

        return redirect()->back();
    }

    public function storeRecommendNews(Request $request, $id)
    {
        RecommendNews::create([
            'article_id' => $id,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
