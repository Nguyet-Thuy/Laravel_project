<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqCategory;

class FaqCategorySeeder extends Seeder
{
    public function run(): void
    {
    
        $categories = [
            'Algemene informatie',
            'Facturatie',
            'Verzending en levering',
            'Retourneren en Omruilen',
            'Technische ondersteuning'
        ];

        foreach ($categories as $categoryName) {
            FaqCategory::create([
                'faqCategory_name' => $categoryName,
            ]);
        }
    }
}
