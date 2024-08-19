<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
    
        $categories = [
            'Books',
            'Bags',
            'Make-up',
            'Baby Stuff',
        ];

       
        foreach ($categories as $categoryName) {
            Category::create([
                'category_name' => $categoryName,
            ]);
        }
    }
}
