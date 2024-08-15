<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function index()
    {
        // Haal alle nieuwsartikelen op en converteer publishing_date naar Carbon object
        $news = News::all()->map(function ($article) {
            $article->publishing_date = Carbon::parse($article->publishing_date);
            return $article;
        });
        
        // Pass the data to the view
        return view('news.index', compact('news'));
    }
}

