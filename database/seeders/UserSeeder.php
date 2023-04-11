<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'=>'Nguyen Ngoc Nam',
                'user_type' => 'ADMIN',
                'email' => 'nguyenngocnam00770@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'phone'=>'0975720527',
                'gender'=>'male',
                'remember_token' => Str::random(10),
            ]
        );
        User::factory(5)->create();

    }
}
