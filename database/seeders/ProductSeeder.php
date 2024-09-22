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
            "Tea",
            "Tea",
            "Tea",
            "Tea",
            "Latte",
            "Ice Latte",
            "Latte",
            "Latte tea",
            "Milk ",
            "Ice cream with coffee ",
            "Coffee",
            "Espresso"
        ];

        $title_ar = [
           "شاي",
           "شاي",
            "شاي",
            "شاي",
            "لاتيه",
            "لاتيه مثلج",
            "لاتيه",
            "شاي لاتيه",
            "حليب",
            "آيس كريم مع قهوة",
            "قهوة",
            "إسبرسو"
        ];

        for ($i = 0; $i < count($image); $i++) {
            $product = Product::create(
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
            $product->file()->create([
                'path' => '../front/images/' . $image[$i],
                'type' => 'image',
            ]);
        }
    }
}
