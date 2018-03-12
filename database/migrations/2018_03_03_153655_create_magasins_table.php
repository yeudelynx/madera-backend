<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagasinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*
    string adresse
    string lib_magasin
    */
    public function up()
    {
        Schema::create('magasins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adresse');
            $table->string('lib_magasin');
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
        Schema::dropIfExists('magasins');
    }
}
