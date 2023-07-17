<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'full_name' => 'Admin Full',
            'email' => 'carlos.garcia@ykm.com.mx',
            'password' => Hash::make('admin369'),
        ]);

        User::create([
            'full_name' => 'Admin Carlos',
            'email' => 'carlos.g@ykm.com.mx',
            'password' => Hash::make('admin369'),
        ]);

        User::factory(10)->create();

    }


}
