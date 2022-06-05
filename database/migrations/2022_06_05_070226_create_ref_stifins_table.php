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
        Schema::create('ref_stifins', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('code', 2)->unique();
            $table->text('short_summary')->nullable();
            $table->text('active_brain_location')->nullable();
            $table->text('equal_intelligence')->nullable();
            $table->text('role')->nullable();
            $table->text('advantage')->nullable();
            $table->text('target')->nullable();
            $table->text('hope')->nullable();
            $table->text('brand_direction')->nullable();
            $table->text('money_behavior')->nullable();
            $table->text('body_shape')->nullable();
            $table->text('body_strength')->nullable();
            $table->text('body_function')->nullable();
            $table->text('psychometric_personality')->nullable();
            $table->text('four_keyword')->nullable();
            $table->text('learn_style')->nullable();
            $table->text('learn_motivation')->nullable();
            $table->text('self_clue')->nullable();
            $table->text('chemistry')->nullable();
            $table->text('school_priority')->nullable();
            $table->text('profession_priority')->nullable();
            $table->text('positive_negative')->nullable();
            $table->text('deep_explanation')->nullable();
            $table->text('other_info')->nullable();
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
        Schema::dropIfExists('ref_stifins');
    }
};
