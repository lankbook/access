<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Utilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('utilisateur', function (Blueprint $table) {
          // $table->integer('id');
          // $table->string('nom');
          // $table->string('prenom');
          $table->string('email');
          $table->string('pass1');
          $table->string('pass2');
          $table->rememberToken();
          $table->timestamps();
          // $table->string('role');
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
