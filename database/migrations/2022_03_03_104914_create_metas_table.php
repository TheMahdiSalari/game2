<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->morphs('metable');
            $table->enum('type',['bigint','int','ubigint','uint','string','float','double','json','array']);
            $table->string('key');
            $table->string('title');
            $table->string('subtitle');
            $table->string('description');
            $table->string('revoked_at');
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
        Schema::dropIfExists('metas');
    }
}
