<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*
    string lib_gamme
    */
    public function up()
    {
        Schema::create('gammes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lib_gamme');
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
        Schema::dropIfExists('gammes');
    }
}
