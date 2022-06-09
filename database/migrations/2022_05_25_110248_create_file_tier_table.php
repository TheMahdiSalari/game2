<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_tier', function (Blueprint $table) {


            $table->uuid('tier_id')
                ->nullable()
                ->index();

            $table->foreign('tier_id')
                ->on('tiers')
                ->references('id')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->uuid('file_id')
                ->nullable()
                ->index();

            $table->foreign('file_id')
                ->on('files')
                ->references('id')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->enum('type',['background','default','image','thumbnail','badge'])->default('background');

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
        Schema::dropIfExists('file_tier');
    }
}
