<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminPassword;

class AdminPasswordSeeder extends Seeder
{
    public function run()
    {
        AdminPassword::create([
            'password' => Hash::make('your_admin_password'),
            'active' => false, // change to true in db for test purposes
        ]);
    }
}