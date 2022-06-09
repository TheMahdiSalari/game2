<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('type_id')
                ->nullable()
                ->index();
            $table->foreign('type_id')
                ->on('application_types')
                ->references('id')
                ->onDelete('set null')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('application');
    }
}
