<?php

namespace Database\Seeders;

use App\Models\InnerPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InnerPageSeeder extends Seeder
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
            "عنوان مستقل",
            "عنوان مستقل",
            "عنوان مستقل",

        ];
        $title_en = [
            "Standalone Heading",
            "Standalone Heading",
            "Standalone Heading",
        ];
        $description_ar = [
            "يُعد نص Lorem Ipsum ببساطة نصًا شكليًا (بمعنى أنه ليس بالضرورة نصًا شكليًا) يُستخدم في الطباعة والتنضيد. وقد ظل نص Lorem Ipsum هو النص الشكلي القياسي في هذه الصناعة.",
            "يُعد نص Lorem Ipsum ببساطة نصًا شكليًا (بمعنى أنه ليس بالضرورة نصًا شكليًا) يُستخدم في الطباعة والتنضيد. وقد ظل نص Lorem Ipsum هو النص الشكلي القياسي في هذه الصناعة.",
            "يُعد نص Lorem Ipsum ببساطة نصًا شكليًا (بمعنى أنه ليس بالضرورة نصًا شكليًا) يُستخدم في الطباعة والتنضيد. وقد ظل نص Lorem Ipsum هو النص الشكلي القياسي في هذه الصناعة.",

        ];
        $description_en = [
            "Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.",
            "Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.",
            "Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.",
        ];
        $subtitle_en = [
            "Most flexible one page",
            "Most flexible one page",
            "Most flexible one page",
        ];

        $subtitle_ar = [
            "أكثر مرونة في صفحة واحدة",
            "أكثر مرونة في صفحة واحدة",
            "أكثر مرونة في صفحة واحدة",

        ];


        $image = [
            '3.jpg',
            '7.jpg',
            '8.jpg',
           
        ];

        for ($i = 0; $i < count($title_en); $i++) {
            $innerpage = InnerPage::create([

                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                    'subtitle' => $subtitle_ar[$i],

                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                    'subtitle' => $subtitle_en[$i],
                ],


            ]);

            $innerpage->file()->create([
                'path' => 'seeders/front/images/' . $image[$i],
                'type' => 'image',
            ]);
        }
    }
}
