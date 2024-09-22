<?php

namespace Database\Seeders;

use App\Models\NewSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //features
         $title = [
           
         ];
 
      
 
         for ($i = 0; $i < count($title); $i++) {
             $newsection = NewSection::create([
               
             ]);
         }
    }
}
