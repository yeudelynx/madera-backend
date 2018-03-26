<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('gammes', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('remises', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('magasins', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('modules', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('couleurs', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('constituers', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('matieres', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('unites', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('sols', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('devis', function (Blueprint $table) {
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
        //
    }
}
