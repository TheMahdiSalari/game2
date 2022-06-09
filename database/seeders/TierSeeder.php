<?php

namespace Database\Seeders;

use App\Models\Tier;
use App\Models\TierType;
use Illuminate\Database\Seeder;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiers = new Tier();
        $tiers->create([
            'type_id' => TierType::inRandomOrder()->first()->id,
            'key' => 'tier-1',
            'title' => 'Tier-1',
            'option' => 'left'
            ]);

        $tiers->create([
            'type_id' => TierType::inRandomOrder()->first()->id,
            'key' => 'tier-2',
            'title' => 'Tier-2',
            'option' => 'center'
        ]);

        $tiers->create([
            'type_id' => TierType::inRandomOrder()->first()->id,
            'key' => 'tier-3',
            'title' => 'Tier-3',
            'option' => 'right'
        ]);

        $tiers->create([
            'type_id' => TierType::inRandomOrder()->first()->id,
            'key' => 'tier-4',
            'title' => 'Tier-4',
            'option' => 'left'
        ]);

        $tiers->create([
            'type_id' => TierType::inRandomOrder()->first()->id,
            'key' => 'tier-5',
            'title' => 'Tier-5',
            'option' => 'center'
        ]);

        $tiers->create([
            'type_id' => TierType::inRandomOrder()->first()->id,
            'key' => 'tier-6',
            'title' => 'Tier-6',
            'option' => 'left'
        ]);

        $tiers->create([
            'type_id' => TierType::inRandomOrder()->first()->id,
            'key' => 'tier-7',
            'title' => 'Tier-7',
            'option' => 'right'
        ]);

        $tiers->create([
            'type_id' => TierType::inRandomOrder()->first()->id,
            'key' => 'tier-8',
            'title' => 'Tier-8',
            'option' => 'right'
        ]);

        $tiers->create([
            'type_id' => TierType::inRandomOrder()->first()->id,
            'key' => 'tier-9',
            'title' => 'Tier-9',
            'option' => 'center'
        ]);

        $tiers->create([
            'type_id' => TierType::inRandomOrder()->first()->id,
            'key' => 'tier-10',
            'title' => 'Tier-10',
            'option' => 'left'
        ]);
    }
}
