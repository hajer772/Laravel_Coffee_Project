<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //features
        $title_ar = [
            "نحن نحب الطعام",
            "التنوع في الغذاء",
            "توصيل مجاني 100%",
            "نحن نحب الطعام",
            "التنوع في الغذاء",
            "توصيل مجاني 100%",
        ];
        $title_en = [
            "We are food lovers",
            "Diversity in food",
            "100% Free Delivery",
            "We are food lovers",
            "Diversity in food",
            "100% Free Delivery",
        ];
        $description_ar = [
            "لوريم إيبسوم دولور سيت أميت، consectetur adipiscing إيليت. Pellentesque dignissim viverra ultrices.",
            "لوريم إيبسوم دولور سيت أميت، consectetur adipiscing إيليت. Pellentesque dignissim viverra ultrices.",
            "لوريم إيبسوم دولور سيت أميت، consectetur adipiscing إيليت. Pellentesque dignissim viverra ultrices.",
            "لوريم إيبسوم دولور سيت أميت، consectetur adipiscing إيليت. Pellentesque dignissim viverra ultrices.",
            "لوريم إيبسوم دولور سيت أميت، consectetur adipiscing إيليت. Pellentesque dignissim viverra ultrices.",
            "لوريم إيبسوم دولور سيت أميت، consectetur adipiscing إيليت. Pellentesque dignissim viverra ultrices.",

        ];
        $description_en = [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim viverra ultrices.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim viverra ultrices.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim viverra ultrices.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim viverra ultrices.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim viverra ultrices.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim viverra ultrices.",
        ];
        $icon = [
            'lni lni-coffee-cup',
            'lni lni-fresh-juice',
            'lni lni-emoji-smile',

            'lni lni-coffee-cup',
            'lni lni-juice',
            'lni lni-emoji-smile',

        ];



        for ($i = 0; $i < count($title_en); $i++) {
            $services = Service::create([

                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i]
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i]
                ],
                'status' => 1,
                'icon' => $icon[$i],

            ]);
        }
    }
}
