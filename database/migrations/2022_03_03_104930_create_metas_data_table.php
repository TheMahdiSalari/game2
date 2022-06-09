<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetasDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas_data', function (Blueprint $table) {
            $table->id();
            $table->morphs('meta_datable');
            $table->string('data');
            $table->uuid('meta_id')->index();
            $table->timestamps();

            $table->foreign('meta_id')->references('id')->on('metas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metas_data');
    }
}
