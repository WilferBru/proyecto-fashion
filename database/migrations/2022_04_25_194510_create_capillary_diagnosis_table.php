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
            $table->string('id_client');
            $table->string('id_washing_frequency');
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
            $table->string('id_hair_type');
            $table->string('id_blood_irrigation');
            $table->string('dry_dandruff');
            $table->string('oily_dandruff');
            $table->string('oily');
            $table->string('itchiness');
            $table->string('wounds');
            $table->string('soreness');
            $table->string('id_peeling');
            $table->string('zones');
            $table->string('id_discredit');
            $table->string('id_thickness');
            $table->string('id_tact');
            $table->string('id_brightness');
            $table->string('id_root');
            $table->string('id_triconogram_type');
            $table->string('id_evolutionary_state');
            $table->string('id_coefficient_growth');
            $table->string('zone_extracted');
            $table->string('number_hair_extracted');
            $table->string('las_wast_date');
            $table->string('id_media');
            $table->string('id_tips');
            $table->string('id_porosity');
            $table->string('id_quantity');
            $table->string('id_longitude');
            $table->string('id_elasticity');
            $table->string('id_curl');
            $table->string('id_way');
            $table->string('id_percentage_greys');
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
