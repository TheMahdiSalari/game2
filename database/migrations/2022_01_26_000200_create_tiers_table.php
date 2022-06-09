<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiers', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('type_id')
                ->nullable()
                ->index();
            $table->foreign('type_id')
                ->on('tier_types')
                ->references('id')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->string('key');
            $table->string('title');
            $table->string('option');
            $table->string('subtitle')->nullable();
            $table->string('description')->nullable();
            $table->dateTime('revoked_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('tiers');
    }
}
