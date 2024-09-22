<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $setting = Setting::create([
            'ar' => [
                'website_title' => 'لوحة التحكم',
                'footer_description' => '<p>تأسست شركة لوحة التحكم في المملكة العربية السعودية لتلبية الطلب المتزايد في مجال البناء والتطوير في المملكة العربية السعودية.</p>',
                'address' => 'ص.ب. ص.ب رقم 14765 الرياض 11434، طريق مكة، الرياض، المملكة العربية السعودية',
                'copyrights' => 'حقوق النشر © 2023 - لوحة التحكم .',
                'meta_keywords' => 'لوحة التحكم',
                'meta_title' => 'لوحة التحكم',
                'meta_description' => 'لوحة التحكم للإنشاءات',
            ],
            'en' => [
                'website_title' => 'Dashboard',
                'footer_description' => '<p>Dashboard was established in Saudi Arabia to meet the ever-growing demand in construction and development in the Kingdom of Saudi Arabia.</p>',
                'address' => 'P.O. Box No. 14765 Riyadh 11434, Makkah Road, Riyadh, Kingdom of Saudi Arabia',
                'copyrights' => 'Copyright © 2023 - ADVACON LTD.',
                'meta_keywords' => 'Dashboard',
                'meta_title' => 'Dashboard',
                'meta_description' => 'Dashboard Construction',
            ],
            'contact_email' => 'mohamed@app.com',
            'newsletter_email' => 'mohamed@app.com',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d464030.3150545121!2d46.702759!3d24.684384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03f25336a507%3A0x8efb4c0747c02a81!2sMakkah%20Al%20Mukarramah%20Br%20Rd%2C%20As%20Sulimaniyah%2C%20Riyadh%20Saudi%20Arabia!5e0!3m2!1sen!2sus!4v1699202090296!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
        $setting->file()->create([
            'path' => 'favicon.ico',
            'type' => 'logo'
        ]);

        $setting->file()->create([
            'path' => 'favicon.ico',
            'type' => 'white_logo'
        ]);

        $setting->file()->create([
            'path' => 'favicon.ico',
            'type' => 'favicon'
        ]);

        $setting->file()->create([
            'path' => 'favicon.ico',
            'type' => 'contact_img'
        ]);

        $setting->file()->create([
            'path' => 'favicon.ico',
            'type' => 'footer_img'
        ]);

        $setting->file()->create([
            'path' => 'favicon.ico',
            'type' => 'breadcrumb'
        ]);
    }
}
