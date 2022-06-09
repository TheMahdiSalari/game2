<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Tier;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = new Profile();
        $profiles->create([
            'user_id' => User::where('email' , 'ojwmjgb@hi2.in')->first()->id,
            'firstname' => 'Abigail' ,
            'lastname' => 'Abraham',
            'gender' => 'female',
            'age' => '27'
        ]);

        $profiles->create([
            'user_id' => User::where('email' , 'zdqvh@hi2.in')->first()->id,
            'firstname' => 'Adrian' ,
            'lastname' => 'Bailey',
            'gender' => 'male',
            'age' => '46'
        ]);

        $profiles->create([
            'user_id' => User::where('email' , 'qhgzvh@hi2.in')->first()->id,
            'firstname' => 'Trevor' ,
            'lastname' => 'Bond',
            'gender' => 'male',
            'age' => '32'
        ]);

        $profiles->create([
            'user_id' => User::where('email' , 'tbiiot@hi2.in')->first()->id,
            'firstname' => 'William' ,
            'lastname' => 'Fisher',
            'gender' => 'male',
            'age' => '51'
        ]);

        $profiles->create([
            'user_id' => User::where('email' , ' tlzetu@hi2.in')->first()->id,
            'firstname' => 'Sally' ,
            'lastname' => 'Duncan',
            'gender' => 'female',
            'age' => '23'
        ]);

        $profiles->create([
            'user_id' => User::where('email' , 'jzhbvn@hi2.in')->first()->id,
            'firstname' => 'Sue' ,
            'lastname' => 'Clark',
            'gender' => 'female',
            'age' => '37'
        ]);

        $profiles->create([
            'user_id' => User::where('email' , 'vczckam@hi2.in')->first()->id,
            'firstname' => 'Oliver' ,
            'lastname' => 'Dyer',
            'gender' => 'male',
            'age' => '29'
        ]);

        $profiles->create([
            'user_id' => User::where('email' , 'damnnpxz@hi2.in')->first()->id,
            'firstname' => 'Wanda' ,
            'lastname' => 'Harris',
            'gender' => 'female',
            'age' => '43'
        ]);

        $profiles->create([
            'user_id' => User::where('email' , 'ivzxfu@hi2.in')->first()->id,
            'firstname' => 'Rachel' ,
            'lastname' => 'Kelly',
            'gender' => 'female',
            'age' => '33'
        ]);

        $profiles->create([
            'user_id' => User::where('email' , 'qemoiwo@hi2.in')->first()->id,
            'firstname' => 'Paul' ,
            'lastname' => 'Hudson',
            'gender' => 'male',
            'age' => '39'
        ]);

    }
}
