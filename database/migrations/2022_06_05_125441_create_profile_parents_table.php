<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_parents', function (Blueprint $table) {
            $table->id();
            $table->string('niw')->unique();
            $table->string('nokk');
            $table->string('father_name');
            $table->string('mother_name');
            $table->unsignedBigInteger('father_status_id')->nullable();
            $table->unsignedBigInteger('mother_status_id')->nullable();
            $table->unsignedBigInteger('father_education_level_id')->nullable();
            $table->unsignedBigInteger('mother_education_level_id')->nullable();
            $table->unsignedBigInteger('father_profession_id')->nullable();
            $table->unsignedBigInteger('mother_profession_id')->nullable();
            $table->decimal('father_income', 12, 2)->nullable();
            $table->decimal('mother_income', 12, 2)->nullable();
            $table->string('father_nik')->nullable();
            $table->string('mother_nik')->nullable();
            $table->string('id_address')->nullable();
            $table->string('id_rt')->nullable();
            $table->string('id_rw')->nullable();
            $table->string('id_subdistrict')->nullable();
            $table->string('id_district')->nullable();
            $table->string('id_city')->nullable();
            $table->string('id_province')->nullable();
            $table->string('id_postcode')->nullable();
            $table->string('domicile_address')->nullable();
            $table->string('domicile_rt')->nullable();
            $table->string('domicile_rw')->nullable();
            $table->string('domicile_subdistrict')->nullable();
            $table->string('domicile_district')->nullable();
            $table->string('domicile_city')->nullable();
            $table->string('domicile_province')->nullable();
            $table->string('domicile_postcode')->nullable();
            $table->string('other_info')->nullable();
            $table->timestamps();
            $table->foreign('father_status_id')->references('id')->on('ref_family_statuses');
            $table->foreign('mother_status_id')->references('id')->on('ref_family_statuses');
            $table->foreign('father_education_level_id')->references('id')->on('ref_education_levels');
            $table->foreign('mother_education_level_id')->references('id')->on('ref_education_levels');
            $table->foreign('father_profession_id')->references('id')->on('ref_professions');
            $table->foreign('mother_profession_id')->references('id')->on('ref_professions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_parents');
    }
};
