<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'title',
        'cover_image',
        'content',
        'publishing_date',
        
    ];

    protected $dates = [
        'publishing_date',
    ];
}
