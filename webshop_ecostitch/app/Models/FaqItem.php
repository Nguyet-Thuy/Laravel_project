<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqItem extends Model
{
    protected $table = 'faq_items';


    protected $fillable = ['question', 'answer', 'category', 'category_id'];

    
    public function category()
    {
        return $this->belongsTo(FaqCategory::class);
    }
}
