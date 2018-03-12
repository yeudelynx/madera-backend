<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('users', function (Blueprint $table) {
            $table->integer('magasin_id')->unsigned()->nullable();
            $table->foreign('magasin_id')->references('id')->on('magasins');
		});

		Schema::table('devis', function (Blueprint $table) {
            $table->integer('client_id')->unsigned()->nullable();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('sol_id')->unsigned()->nullable();
            $table->foreign('sol_id')->references('id')->on('sols');         
		});

		Schema::table('modules', function (Blueprint $table) {
            $table->integer('gamme_id')->unsigned()->nullable();
            $table->foreign('gamme_id')->references('id')->on('gammes');
            $table->integer('categorie_id')->unsigned()->nullable();
            $table->foreign('categorie_id')->references('id')->on('categories');
		});

		Schema::table('gammes', function (Blueprint $table) {
            $table->integer('remise_id')->unsigned()->nullable();
            $table->foreign('remise_id')->references('id')->on('remises');
		});

		Schema::table('constituers', function (Blueprint $table) {
            $table->integer('module_id')->unsigned()->nullable();
            $table->foreign('module_id')->references('id')->on('modules');
            $table->integer('devis_id')->unsigned()->nullable();
            $table->foreign('devis_id')->references('id')->on('devis');
            $table->integer('couleur_id')->unsigned()->nullable();
            $table->foreign('couleur_id')->references('id')->on('couleurs');
            $table->integer('matiere_id')->unsigned()->nullable();
            $table->foreign('matiere_id')->references('id')->on('matieres');
            $table->integer('unite_id')->unsigned()->nullable();
            $table->foreign('unite_id')->references('id')->on('unites');
		});

    }
}