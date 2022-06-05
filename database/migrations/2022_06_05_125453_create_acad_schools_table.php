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
        Schema::create('acad_schools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ref_branch_id');
            $table->unsignedBigInteger('ref_education_level_id');
            $table->unsignedBigInteger('principal_id')->nullable();
            $table->string('name');
            $table->string('number_code');
            $table->string('npsn')->nullable();
            $table->string('address')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('other_info')->nullable();
            $table->timestamps();
            $table->foreign('ref_branch_id')->references('id')->on('ref_branches');
            $table->foreign('ref_education_level_id')->references('id')->on('ref_education_levels');
            $table->foreign('principal_id')->references('id')->on('profile_employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acad_schools');
    }
};
