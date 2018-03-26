<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sols', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_sol');
            $table->double('longueur', 10, 3);
            $table->double('largeur', 10, 3);
            $table->multiPoint('list_points_sol');
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
        Schema::dropIfExists('sols');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
