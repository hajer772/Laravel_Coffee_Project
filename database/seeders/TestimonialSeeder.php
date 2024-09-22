<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = ['testimonial-1.jpg', 'testimonial-1.jpg', 'testimonial-1.jpg', 'testimonial-1.jpg'];
        // $titles = ['Instructor', 'Instructor', 'Instructor', 'Instructor'];
        $descriptions_en = [
        "It's fine", 
        "It's fine", 
        "It's fine", 
        "It's fine"];
        $client_name_en = ['Mandy Rose', 'Sara Williams', 'Hager Mahmoud', 'Salma Ali'];




        $descriptions_ar = ["إنه بخير","إنه بخير","إنه بخير","إنه بخير"];

        $client_name_ar = ["ماندي روز", "سارة ويليامز", "هاجر محمود", "سلمى علي"];


        for ($s = 0; $s < count($images); $s++) {
            $testimonial = Testimonial::create(attributes: [
                'ar' => [
                    // 'title' => $titles[$s],
                    'client_name' => $client_name_ar[$s],
                    'description' => $descriptions_ar[$s]
                ],
                'en' => [
                    // 'title' => $titles[$s],
                    'client_name' => $client_name_en[$s],
                    'description' => $descriptions_en[$s]
                ],
                'status' => 1
            ]);
            $testimonial->file()->create([
                'path' => '../front/images/' . $images[$s],
                'type' => 'image'
            ]);
        }
    }
}
