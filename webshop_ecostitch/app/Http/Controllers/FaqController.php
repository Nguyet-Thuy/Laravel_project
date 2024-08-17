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

    public function showFaq()
    {
        // Haal de FAQ-items op en sorteer ze op categorie
        $faqItems = FaqItem::orderBy('category') // Sorteer op categorie
                            ->get(); // Geen extra sortering op created_at
    
        // Stuur de gesorteerde items naar de view
        return view('home.faq', ['faqItem' => $faqItems]);
    }
    
    

}
