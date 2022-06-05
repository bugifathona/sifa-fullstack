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
        Schema::create('profile_employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ref_branch_id')->nullable();
            $table->string('front_title')->nullable();
            $table->string('fullname');
            $table->string('back_title')->nullable();
            $table->string('nickname')->nullable();
            $table->string('birthplace')->nullable();
            $table->date('birthdate')->nullable();
            $table->unsignedBigInteger('ref_gender_id')->nullable();
            $table->unsignedBigInteger('ref_religion_id')->nullable();
            $table->unsignedBigInteger('ref_stifin_id')->nullable();
            $table->string('nationality')->default('Indonesia');
            $table->string('nik')->unique();
            $table->string('nuptk')->nullable();
            $table->string('npwp')->nullable();
            $table->date('work_start_date')->nullable();
            $table->date('work_end_date')->nullable();
            $table->unsignedBigInteger('ref_employment_type_id')->nullable();
            $table->string('niy')->unique();
            $table->string('avatar')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('other_info')->nullable();
            $table->timestamps();
            $table->foreign('ref_branch_id')->references('id')->on('ref_branches');
            $table->foreign('ref_gender_id')->references('id')->on('ref_genders');
            $table->foreign('ref_religion_id')->references('id')->on('ref_religions');
            $table->foreign('ref_stifin_id')->references('id')->on('ref_stifins');
            $table->foreign('ref_employment_type_id')->references('id')->on('ref_employment_types');
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
        Schema::dropIfExists('profile_employees');
    }
};
