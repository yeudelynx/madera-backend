<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouleursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*
    string lib_couleur
    string code_couleur
    */
    public function up()
    {
        Schema::create('couleurs', function (Blueprint $table) {
            $table->increments('id');
            $table->sting('lib_couleur');
            $table->sting('code_couleur');
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
        Schema::dropIfExists('couleurs');
    }
}
