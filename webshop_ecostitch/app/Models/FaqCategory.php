<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    protected $table = 'faq_categories';

    
    protected $fillable = ['name'];

    public function items()
    {
        return $this->hasMany(FaqItem::class);
    }
}
