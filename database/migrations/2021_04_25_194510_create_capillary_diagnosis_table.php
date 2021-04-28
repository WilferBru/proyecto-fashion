<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapillaryDiagnosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capillary_diagnosis', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('id_client')->unique();
            $table->string('id_washing_frequency')->unique();
            $table->string('habitual_hairstyle');
            $table->string('dried_type');
            $table->string('use_products');
            $table->string('recent_illnesses');
            $table->string('infections');
            $table->string('hormonal_problems');
            $table->string('drug_poisoning');
            $table->string('emotional_ternure');
            $table->string('recent_operations');
            $table->string('pregnancy');
            $table->string('oral_contraceptives');
            $table->string('stress');
            $table->string('allergies');
            $table->string('illness');
            $table->string('id_hair_type')->unique();
            $table->string('id_blody_irrigation')->unique();
            $table->string('id_alterations')->unique();
            $table->string('id_peeling')->unique();
            $table->string('id_discredit')->unique();
            $table->string('id_thickness')->unique();
            $table->string('id_tact')->unique();
            $table->string('id_brightness')->unique();
            $table->string('id_root')->unique();
            $table->string('id_media')->unique();
            $table->string('id_tips')->unique();
            $table->string('id_porocity')->unique();
            $table->string('id_quantity')->unique();
            $table->string('id_longitude')->unique();
            $table->string('id_elacticity')->unique();
            $table->string('id_curl')->unique();
            $table->string('id_way')->unique();
            $table->string('id_percentage_greys')->unique();
            $table->string('cosmetic_color');
            $table->string('remarks');
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
        Schema::dropIfExists('capillary_diagnosis');
    }
}
