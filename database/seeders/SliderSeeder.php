<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run()
    {
        $images = ['1.jpg', '2.png', '3.jpg'];
        $titles = ['شبكات الإنترنت', 'البيوت الذكية ونظم حماية الطاقة', 'أنظمة لإطفاء الحريق'];
        $descriptions = ['<p>يتم توفير خدمات شبكة عالمية متكاملة ومتقدمة. وتتضمن هذه الخدمات مجموعة واسعة من الأجهزة والأنظمة والتطبيقات والخدمات الإلكترونية المختلفة</p>',
            '<p>يتميز بيوت الذكية عن بيوت الأنسانية عن طريق توفير مجموعة واسعة من المميزات التكنولوجية والأمانية والأداء. ويمكن تشغيلها من خلال شبكات الإنترنت وتوفير بيانات حول استخدام المستشعرات وتحسين تكامل أجهزة الاتصال والأجهزة الأخرى في المنزل</p>',
            '<p>تتوفر لنا خدمات تطوير نظم اطفاء الحريق ونظم حماية الطاقة. ويتضمن تطوير نظم اطفاء الحريق مجموعة واسعة من التطبيقات والأجهزة والأنظمة الذين يمكنهم تكاملاً وتشغيلاً تشابه الانساني</p>'];

        for ($s = 0; $s < count($titles); $s++) {
            $slider = Slider::create([
                'ar' => [
                    'title' => $titles[$s],
                    'description' => $descriptions[$s]
                ],
                'status' => 1
            ]);
            $slider->file()->create([
                'path' => 'seeders/sliders/' . $images[$s],
                'type' => 'image'
            ]);
        }
    }
}
