<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Tier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileTierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-1')->first()->id,
            'profile_id' => Profile::where('firstname' , 'Abigail')->first()->id,
        ]);

        DB::table('profile_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-2')->first()->id,
            'profile_id' => Profile::where('firstname' , 'Adrian')->first()->id,
        ]);

        DB::table('profile_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-3')->first()->id,
            'profile_id' => Profile::where('firstname' , 'Trevor')->first()->id,
        ]);

        DB::table('profile_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-4')->first()->id,
            'profile_id' => Profile::where('firstname' , 'William')->first()->id,
        ]);

        DB::table('profile_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-5')->first()->id,
            'profile_id' => Profile::where('firstname' , 'Sally')->first()->id,
        ]);

        DB::table('profile_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-6')->first()->id,
            'profile_id' => Profile::where('firstname' , 'Sue')->first()->id,
        ]);

        DB::table('profile_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-7')->first()->id,
            'profile_id' => Profile::where('firstname' , 'Oliver')->first()->id,
        ]);

        DB::table('profile_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-8')->first()->id,
            'profile_id' => Profile::where('firstname' , 'Wanda')->first()->id,
        ]);

        DB::table('profile_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-9')->first()->id,
            'profile_id' => Profile::where('firstname' , 'Rachel')->first()->id,
        ]);

        DB::table('profile_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-10')->first()->id,
            'profile_id' => Profile::where('firstname' , 'Paul')->first()->id,
        ]);
    }
}
