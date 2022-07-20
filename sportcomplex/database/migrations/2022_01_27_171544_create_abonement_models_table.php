<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonementModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonement_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_abon', 50)->nullable(false)->unique('name');
            $table->string('price', 20)->nullable(false);
            $table->string('description',255)->nullable(false);
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
        Schema::dropIfExists('abonement_models');
    }
}
