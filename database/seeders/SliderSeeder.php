<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run()
    {
        $images = [
            'coffee-left.jpg',
            'coffee-center.jpg',
            'coffee-right.jpg'
        ];

        $subtitle_en = [
            "Best in Town",
            "Best in Town",
            "Best in Town",
        ];
        $subtitle_ar = [
            "الأفضل في المدينة",
            "الأفضل في المدينة",
            "الأفضل في المدينة",
        ];

        $title_ar = [
            "بيت القهوة",
            "بيت القهوة",
            "بيت القهوة",
        ];
        $title_en = [
            "Coffee House",
            "Coffee House",
            "Coffee House",
        ];

        $description_en = [
            "Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.  Lorem Ipsum has been the industry’s standard dummy.",
            "Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.  Lorem Ipsum has been the industry’s standard dummy.",
            "Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.  Lorem Ipsum has been the industry’s standard dummy.",
        ];

        $description_ar = [
            "Lorem ipsum هو ببساطة نص شكلي بديل للطباعة والتنضيد. لقد كان Lorem Ipsum النص الشكلي البديل القياسي في الصناعة. لقد كان Lorem Ipsum النص الشكلي البديل القياسي في الصناعة.",
            "Lorem ipsum هو ببساطة نص شكلي بديل للطباعة والتنضيد. لقد كان Lorem Ipsum النص الشكلي البديل القياسي في الصناعة. لقد كان Lorem Ipsum النص الشكلي البديل القياسي في الصناعة.",
            "Lorem ipsum هو ببساطة نص شكلي بديل للطباعة والتنضيد. لقد كان Lorem Ipsum النص الشكلي البديل القياسي في الصناعة. لقد كان Lorem Ipsum النص الشكلي البديل القياسي في الصناعة.",
        ];

        $button_value_en = [
            "LEARN MORE",
            "LEARN MORE",
            "LEARN MORE",
        ];
        $button_value_ar = [
            "اعرف المزيد",
            "اعرف المزيد",
            "اعرف المزيد",
        ];

        for ($s = 0; $s < count($title_en); $s++) {
            $slider = Slider::create([
                'ar' => [
                    'title' => $title_ar[$s],
                    'description' => $description_ar[$s],
                    'subtitle' => $subtitle_ar[$s],
                    'button'=>$button_value_ar[$s]
                ],
                'en' => [
                    'title' => $title_en[$s],
                    'description' => $description_en[$s],
                    'subtitle' => $subtitle_en[$s],
                    'button'=>$button_value_en[$s]

                ],
                'status' => 1
            ]);
            $slider->file()->create([
                'path' => 'seeders/front/images/' . $images[$s],
                'type' => 'image'
            ]);
        }
    }
}
