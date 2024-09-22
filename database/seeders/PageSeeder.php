<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run()
    {
        //feature_page Homepage
        $feature_page = Page::create([
            "identifier" => "feature_page",
            "has_title" => 1,
            "has_sub_title" => 1,
            "has_description" => 0,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 0,
            "ar" => [
                "title" => "مميزات شركة الأنظمة الماسية",
                "sub_title" => "تعتبر شركة الأنظمة الماسية رواد فى تقديم الخدمات ذات جودة أعلى فى مجال الأنظمة الأمني",
            ],
        ]);

        //first_separator Homepage
        $first_separator = Page::create([
            "identifier" => "first_separator",
            "has_title" => 1,
            "has_sub_title" => 1,
            "has_description" => 0,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "إجعل منزلك أكثر أماناً",
                "sub_title" => "نوفر لك أحث التقنيات لجعل منزلك زكي وآمن",
            ],
        ]);

        $first_separator->file()->create([
            "path" => "seeders/pages/first_separator.webp",
            "type" => "image",
        ]);

        //counter Homepage
        $counter = Page::create([
            "identifier" => "counter_page",
            "has_title" => 1,
            "has_sub_title" => 1,
            "has_description" => 0,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "أرقامنا وتخديتنا تتكلم عنا",
                "sub_title" => "شركة الأنظمة الماسية تعتبر من أفضل الشركات فى المملكة العربية السعودية فى توفير الأنظمة الأمنية",
            ],
        ]);

        //second_separator Homepage
        $second_separator = Page::create([
            "identifier" => "second_separator",
            "has_title" => 1,
            "has_sub_title" => 1,
            "has_description" => 0,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "انظمة أمنية فائقة الجودة",
                "sub_title" => "تتوفر لدينا أنظمة أمنية لجميع إحتياجاتك فائقة الجودة وبأحدث التقنيات",
            ],
        ]);

        $second_separator->file()->create([
            "path" => "seeders/pages/second_separator.jpg",
            "type" => "image",
        ]);

        //about AboutPage
        $about = Page::create([
            "identifier" => "about",
            "has_title" => 1,
            "has_sub_title" => 0,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "عن المؤسسة",
                "description" => "<p>نعتبر الرواد فى تقديم الخدمات ذات جودة أعلى فى مجال الأنظمة الأمنية والمراقبة والسلامة وتجاوز إحتياجات عملائنا المحددة والمخصصة من خلال تقديم أعلى مستويات الخدمات الأمنية الخاصة والمبنية على الثقة</p>",
            ],
        ]);

        $about->file()->create([
            "path" => "seeders/pages/about.png",
            "type" => "image",
        ]);

        //our vision AboutPage
        $our_vision = Page::create([
            "identifier" => "our_vision",
            "has_title" => 1,
            "has_sub_title" => 0,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "رؤيتنا",
                "description" => "<p>إن التخطيط الذكي والتنفيذ المثالي والأداء الإبداعي واحترام وقت التسليم هي معايير عملنا التي اتبعناها في عملنا.</p>",
            ],
        ]);

        $our_vision->file()->create([
            "path" => "seeders/pages/vision.jpg",
            "type" => "image",
        ]);

        //our mission AboutPage
        $our_mission = Page::create([
            "identifier" => "our_mission",
            "has_title" => 1,
            "has_sub_title" => 0,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "مهمتنا",
                "description" => "<p>تلتزم شركة الأنظمة الماسية المتطورة المحدودة بتقديم خدمات وتقنيات عصرية، وحلول متميزة ذات جودة عالية، ترقى لتطلعات واحتياجات عملائها، وذلك من خلال السعي الدائم نحو تطوير سياساتنا وإجراءاتنا، بجانب تدريب العاملين لدينا على أفضل وأحدث التقنيات المعروفة في هذا المجال، بما يتماشى مع رسالة الشركة ورؤيتها وأهدافها.</p>",
            ],
        ]);

        $our_mission->file()->create([
            "path" => "seeders/pages/mission.jpg",
            "type" => "image",
        ]);

    }
}
