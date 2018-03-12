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
        Schema::create('magasins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('ville');
            $table->string('password');
            $table->integer('magasin_id')->unsigned()->nullable();
            $table->foreign('magasin_id')->references('id')->on('magasins');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
