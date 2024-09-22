<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingContactSeeder extends Seeder
{
    public function run()
    {
        $setting = Setting::first();
        //contact 1
        //contact 4
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://www.facebook.com/",
            "type" => "social",
            "icon" => "fab fa-facebook-f",
        ]);

        //contact 6
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://twitter.com/",
            "type" => "social",
            "icon" => "fab fa-twitter",
        ]);
        //contact 3
        $setting->contact()->create([
            "status" => "1",
            "contact" => "contact@advacon.com",
            "type" => "email",
            "icon" => "far fa-envelope",
        ]);

        //contact 7
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://www.linkedin.com/",
            "type" => "social",
            "icon" => "fab fa-linkedin-in",
        ]);

        //contact 5
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://www.instagram.com/",
            "type" => "social",
            "icon" => "fab fa-instagram",
        ]);


         $setting->contact()->create([
            "status" => "1",
            "contact" => "https://www.pinterest.com/",
            "type" => "website",
            "icon" => "fab fa-pinterest-p",
        ]);

        // $setting->contact()->create([
        //     "status" => "1",
        //     "contact" => "+966558555555",
        //     "type" => "mobile",
        //     "icon" => "fas fa-mobile-alt",
        // ]);

        // $setting->contact()->create([
        //     "status" => "1",
        //     "contact" => "+966558555555",
        //     "type" => "phone",
        //     "icon" => "fas fa-mobile-alt",
        // ]);

        // //whatsapp
        // $setting->contact()->create([
        //     "status" => "1",
        //     "contact" => "+966558555555",
        //     "type" => "whatsapp",
        //     "icon" => "fab fa-whatsapp",
        // ]);








    }
}
