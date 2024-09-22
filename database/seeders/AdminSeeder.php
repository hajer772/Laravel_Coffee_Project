<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            'first_name'=>'admin',
            'email'=>'admin@app.com',
            'password'=>'123456789'
        ]);
        $admin->attachRole('super_admin');
//        $role = Role::first();
//        $admin->attachRole($role);

    }
}
