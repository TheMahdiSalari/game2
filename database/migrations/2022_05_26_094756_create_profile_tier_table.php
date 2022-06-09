<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_tier', function (Blueprint $table) {
            $table->uuid('tier_id')
                ->nullable()
                ->index();

            $table->foreign('tier_id')
                ->on('tiers')
                ->references('id')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->uuid('profile_id')
                ->nullable()
                ->index();

            $table->foreign('profile_id')
                ->on('profiles')
                ->references('id')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_tier');
    }
}
