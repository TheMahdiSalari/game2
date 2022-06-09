<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Tier;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new User();
        $users->create([
            'country_code' => 'IS',
            'phone_number' => '+12893340783',
            'email' => 'ojwmjgb@hi2.in',
            'username' => 'user#' . rand(300000,800000),
            'password' => '12345678'
        ]);

        $users->create([
            'country_code' => 'CM',
            'phone_number' => '+17055350853',
            'email' => 'zdqvh@hi2.in',
            'username' => 'user#' . rand(300000,800000),
            'password' => '12345678'
        ]);

        $users->create([
            'country_code' => 'NR',
            'phone_number' => '+447537150994',
            'email' => 'qhgzvh@hi2.in',
            'username' => 'user#' . rand(300000,800000),
            'password' => '12345678'
        ]);

        $users->create([
            'country_code' => 'SB',
            'phone_number' => '+447418363824',
            'email' => 'tbiiot@hi2.in',
            'username' => 'user#' . rand(300000,800000),
            'password' => '12345678'
        ]);

        $users->create([
            'country_code' => 'TR',
            'phone_number' => '+13526232628',
            'email' => 'tlzetu@hi2.in',
            'username' => 'user#' . rand(300000,800000),
            'password' => '12345678'
        ]);

        $users->create([
            'country_code' => 'IN',
            'phone_number' => '+14109297936',
            'email' => 'jzhbvn@hi2.in',
            'username' => 'user#' . rand(300000,800000),
            'password' => '12345678'
        ]);

        $users->create([
            'country_code' => 'NC',
            'phone_number' => '+15714870566',
            'email' => 'vczckam@hi2.in',
            'username' => 'user#' . rand(300000,800000),
            'password' => '12345678'
        ]);

        $users->create([
            'country_code' => 'JM',
            'phone_number' => '+19206575978',
            'email' => 'damnnpxz@hi2.in',
            'username' => 'user#' . rand(300000,800000),
            'password' => '12345678'
        ]);

        $users->create([
            'country_code' => 'SM',
            'phone_number' => '+19378064417',
            'email' => 'ivzxfu@hi2.in',
            'username' => 'user#' . rand(300000,800000),
            'password' => '12345678'
        ]);

        $users->create([
            'country_code' => 'FJ',
            'phone_number' => '+16137779527',
            'email' => 'qemoiwo@hi2.in',
            'username' => 'user#' . rand(300000,800000),
            'password' => '12345678'
        ]);

    }
}
