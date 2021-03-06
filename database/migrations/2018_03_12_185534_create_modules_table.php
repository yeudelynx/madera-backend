<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lib_module');
            $table->double('prix', 10, 2);
            $table->double('longueur', 10, 3);
            $table->double('hauteur', 10, 3);
            $table->double('largeur', 10, 3);
            $table->double('distance_sol', 6, 3);
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
        Schema::dropIfExists('modules');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
}
