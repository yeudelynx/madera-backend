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
    public function up()
    {
        Schema::create('constituers', function (Blueprint $table) {
            $table->increments('id');
            $table->double('x_pos', 10, 3);
            $table->double('y_pos', 10, 3);
            $table->double('z_pos', 10, 3);
            $table->integer('etage_plan');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('constituers');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
