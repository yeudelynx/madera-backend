<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*
    float valeur_remise
    int nombre_modules_gamme
    string lib_remise
    */
    public function up()
    {
        Schema::create('remises', function (Blueprint $table) {
            $table->increments('id');
            $table->double('valeur_remise', 9, 2);
            $table->string('lib_remise');
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
        Schema::dropIfExists('remises');
    }
}
