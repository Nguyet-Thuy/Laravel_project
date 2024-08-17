<?php

namespace App\Http\Controllers;

use App\Models\FaqCategory;
use App\Models\FaqItem;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        
        $categories = FaqCategory::all();
        $faqItem = FaqItem::all();

        return view('faq.index', compact('categories','faqItem'));
    }
}
