<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([

            'name' => 'Hala',
            'email' => 'halatamimi@gmail.com',
            'password' => bcrypt('secret'),
            'email_verified_at'=>'halatamimi@gmail.com',
            'created_at'=> '2023-12-23 8:49 PM',
            'updated_at'=> '2023-12-23 8:49 PM',
        ]);
    }
}
