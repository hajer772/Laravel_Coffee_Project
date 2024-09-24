<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

             
    public function run()
    {
        $title_en = [
            'Cold',
            'Hot',
            'Espresso',
            'Ice Cream',

        ];
        $title_ar = [
            'بارد',
            'ساخن',
            'إسبرسو',
            'آيس كريم',
                    ]; 
                                     
        for ($i = 0; $i < count($title_ar); $i++) {
        
            $category = Category::create(
                [
                    'ar' => [
                        'title' => $title_ar[$i],
                      
                      
                    ],
                    'en' => [
                        'title' => $title_en[$i],
                       
                       
                    ],
                    'status' => 1,
                    'title' => $title_en[$i],
                    
                ]
            );

            Category::create(
                [
                    'ar' => [
                        'title' => $title_ar[$i],
                      
                      
                    ],
                    'en' => [
                        'title' => $title_en[$i],
                       
                       
                    ],
                    'status' => 1
                ]
            );
          

        
        }
    }
}
