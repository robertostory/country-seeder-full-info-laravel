<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Countries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function($table) {
            $table->increments('id');
            $table->string('name_en')->nullable();
            $table->string('name_es')->nullable();
            $table->string('name_it')->nullable();
            $table->string('name_br')->nullable();
            $table->string('name_fr')->nullable();
            $table->string('alpha2Code');
            $table->string('alpha3Code');
            $table->string('dialcode');
            $table->string('currenciesCode')->nullable();
            $table->string('currenciesSymbol')->nullable();
            $table->string('flag')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
