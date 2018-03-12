<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstituersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*
    float x_pos
    float y_pos
    float z_pos
    int etage_plan
    float prix_module
    */
    public function up()
    {
        Schema::create('constituers', function (Blueprint $table) {
            $table->increments('id');
            $table->double('x_pos', 10, 3);
            $table->double('y_pos', 10, 3);
            $table->double('z_pos', 10, 3);
            $table->int('etage_plan');
            $table->double('prix_module', 9, 2);
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
        Schema::dropIfExists('constituers');
    }
}
