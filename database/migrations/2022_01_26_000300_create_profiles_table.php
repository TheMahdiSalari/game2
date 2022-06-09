<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('user_id')
                ->nullable()
                ->index();
            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->string('age');
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
        Schema::dropIfExists('profiles');
    }
}
