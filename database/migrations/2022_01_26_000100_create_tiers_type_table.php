<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiersTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tier_types', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('application_id')
                ->nullable()
                ->index();

            $table->foreign('application_id')
                ->on('applications')
                ->references('id')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->string('key');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('description')->nullable();
            $table->string('revoked_at')->nullable();
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
        Schema::dropIfExists('tiers_type');
    }
}
