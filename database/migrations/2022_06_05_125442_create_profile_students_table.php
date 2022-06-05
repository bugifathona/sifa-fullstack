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
        Schema::create('profile_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('acad_school_id')->nullable();
            $table->unsignedBigInteger('ref_entry_year_id')->nullable();
            $table->unsignedBigInteger('acad_school_origin_id')->nullable();
            $table->unsignedBigInteger('profile_parent_id')->nullable();
            $table->string('nis')->nullable();
            $table->string('nisy')->nullable();
            $table->string('nisn')->nullable();
            $table->string('nik')->nullable();
            $table->string('no_un')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('no_kip')->nullable();
            $table->string('no_va')->nullable();
            $table->string('fullname');
            $table->string('nickname')->nullable();
            $table->string('birthplace')->nullable();
            $table->date('birthdate')->nullable();
            $table->unsignedBigInteger('ref_gender_id')->nullable();
            $table->unsignedBigInteger('ref_religion_id')->nullable();
            $table->unsignedBigInteger('ref_stifin_id')->nullable();
            $table->boolean('is_special_need')->default(false);
            $table->string('avatar')->nullable();
            $table->date('entry_date')->nullable();
            $table->date('exit_date')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('other_info')->nullable();
            $table->timestamps();
            $table->foreign('acad_school_id')->references('id')->on('acad_schools');
            $table->foreign('ref_entry_year_id')->references('id')->on('ref_entry_years');
            $table->foreign('acad_school_origin_id')->references('id')->on('acad_school_origin_id');
            $table->foreign('profile_parent_id')->references('id')->on('profile_parents');
            $table->foreign('ref_gender_id')->references('id')->on('ref_genders');
            $table->foreign('ref_religion_id')->references('id')->on('ref_religions');
            $table->foreign('ref_stifin_id')->references('id')->on('ref_stifins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_students');
    }
};
