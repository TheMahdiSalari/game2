<?php

namespace App\Providers;

use App\Models\Meta;
use App\Models\Tier;
use App\Models\Tier_Type;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::enforceMorphMap([
            'tire' => Tier::class,
            'meta' => Meta::class,
            'tire_type' => Tier_Type::class,
            ]);
    }
}
