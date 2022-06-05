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
        Schema::create('ref_class_grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ref_education_level_id');
            $table->string('name');
            $table->string('alias');
            $table->string('other_info')->nullable();
            $table->timestamps();
            $table->foreign('ref_education_level_id')->references('id')->on('ref_education_levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_class_grades');
    }
};
