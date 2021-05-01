<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlterationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alterations', function (Blueprint $table) {
            $table->id();
            $table->string('dry_dandruff');
            $table->string('oily_dandruff');
            $table->string('oily');
            $table->string('itchiness');
            $table->string('wounds');
            $table->string('soreness');
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
        Schema::dropIfExists('alterations');
    }
}
