<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all()->map(function ($article) {
            $article->publishing_date = Carbon::parse($article->publishing_date);
            return $article;
        });
        
        return view('news.index', compact('news'));
    }
}

