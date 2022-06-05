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
        Schema::create('ref_periods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ref_period_type_id');
            $table->string('name');
            $table->string('alias');
            $table->string('other_info')->nullable();
            $table->timestamps();
            $table->foreign('ref_period_type_id')->references('id')->on('ref_period_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_periods');
    }
};
