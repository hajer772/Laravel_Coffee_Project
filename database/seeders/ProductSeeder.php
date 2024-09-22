<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $image = [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '7.jpg',
            '8.jpg',
            '9.jpg',
            '10.jpg',
            '11.jpg',
            '12.jpg',

        ];
        $title_en = [
            "Iced Coffee",
            "Tea With Milk",
            "Iced Tea",
            "Tea",
            "Latte",
            "Iced Latte",
            "Latte",
            "Latte tea",
            "Milk Shake ",
            "Coffee",
            "Espresso",
            "Ice cream with coffee ",
        ];

        $title_ar = [
           "قهوة مثلجة",
            "شاي بالحليب",
            "شاي مثلج",
            "شاي",
            "لاتيه",
            "لاتيه مثلج",
            "لاتيه",
            "شاي لاتيه",
            "ميلك شيك",
            "قهوة",
            "إسبريسو",
            "آيس كريم بالقهوة",
        ];

        $price=[

            "10$",
            "5$ ",
            "5$",
            "3$",
            "15$",
            "15$",
            "15$",
            "20$",
            "30$",
            "12.5$",
            "25$",
            "40$",
        ];

        for ($i = 0; $i < count($image); $i++) {
            $product = Product::create(
                [
                    'ar' => [
                        'title' => $title_ar[$i],
                        'price' => $price[$i],

                      
                    ],
                    'en' => [
                        'title' => $title_en[$i],
                        'price' => $price[$i],
                       
                    ],
                    'status' => 1
                ]
            );
            $product->file()->create([
                'path' => '../front/images/' . $image[$i],
                'type' => 'image',
            ]);
        }
    }
}
