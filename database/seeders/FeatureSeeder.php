<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{

    public function run()
    {
        //features
        $title = [
           
        ];

     

        for ($i = 0; $i < count($title); $i++) {
            $feature = Feature::create([
              
            ]);
        }



        
    }
}
