<?php

namespace Database\Seeders;

use App\Models\File;
use App\Models\Tier;
use App\Models\TierType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileTierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('file_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-1')->first()->id,
            'file_id' => File::where('name' , 'img1.png')->first()->id,
        ]);

        DB::table('file_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-2')->first()->id,
            'file_id' => File::where('name' , 'img2.png')->first()->id,
        ]);

        DB::table('file_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-3')->first()->id,
            'file_id' => File::where('name' , 'img3.png')->first()->id,
        ]);

        DB::table('file_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-4')->first()->id,
            'file_id' => File::where('name' , 'img4.jpg')->first()->id,
        ]);

        DB::table('file_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-5')->first()->id,
            'file_id' => File::where('name' , 'img5.png')->first()->id,
        ]);

        DB::table('file_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-6')->first()->id,
            'file_id' => File::where('name' , 'img6.png')->first()->id,
        ]);

        DB::table('file_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-7')->first()->id,
            'file_id' => File::where('name' , 'img7.jpg')->first()->id,
        ]);

        DB::table('file_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-8')->first()->id,
            'file_id' => File::where('name' , 'img8.png')->first()->id,
        ]);

        DB::table('file_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-9')->first()->id,
            'file_id' => File::where('name' , 'img9.jpg')->first()->id,
        ]);

        DB::table('file_tier')->insert([

            'tier_id' => Tier::where('key' , 'tier-10')->first()->id,
            'file_id' => File::where('name' , 'img10.jpg')->first()->id,
        ]);


    }
}
