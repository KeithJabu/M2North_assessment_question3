<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Country')->nullable();
            $table->string('Total_cases')->nullable();
            $table->string('New_cases')->nullable();
            $table->string('Total_deaths')->nullable();
            $table->string('New_deaths')->nullable();
            $table->string('Total_Recovered')->nullable();
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
        Schema::dropIfExists('virsus');
    }
}
