<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        $logos = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.png', '10.jpg'];
        for ($c = 0; $c < count($logos); $c++) {
            $client = Client::create([
                'status' => 1
            ]);
            $client->file()->create([
                'path' => 'seeders/clients/' . $logos[$c],
                'type' => 'image'
            ]);
        }
    }
}
