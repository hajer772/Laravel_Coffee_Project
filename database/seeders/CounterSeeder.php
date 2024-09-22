<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    public function run()
    {
    
         //features
         $title_en = [
            'Coffee Cups',
            'Customers',
            'Cup of Tea',
            'Since'
        ];

        $title_ar = [
            "أكواب القهوة",
            "العملاء",
            "فنجان شاي",
            "منذ"
        ];

        $number = [
           3785,
           2995,
           1559,
           1990
        ];

        $icon = [
            'lni-coffee-cup',
            'lni-emoji-smile',
            'lni-coffee-cup',
            'lni-investment'
        ];
        for ($i = 0; $i < count($title_en); $i++) {
            $counter = Counter::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ], 
                'en' => [
                    'title' => $title_en[$i],
                ],
                'icon' => $icon[$i],
                'number' => $number[$i],
                'status' => 1,
            ]);
        }

    }
}
