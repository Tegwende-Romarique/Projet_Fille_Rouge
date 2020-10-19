<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->Increments('id');
            $table->timestamps();
            $table->string('nom');
            $table->string('prenom');
            $table->string('genre');
            $table->string('date_de_naissance');
            $table->string('email');
            $table->Integer('telephone');
            $table->string('matricule');

            $table->unsignedBigInteger('etablissement_id');
            $table->unsignedBigInteger('parent_id');
            $table->unsignedBigInteger('classe_id');
            // $table->unsignedBigInteger('cycle_id');
            $table->unsignedBigInteger('role_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleves');
    }
}
