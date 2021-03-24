<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('jour');
            $table->integer('places');
            $table->string('statut');
            // $table->integer('id_users');
            
            $table->unsignedBigInteger('id_users');
            // $table->foreign('id_users')
            //     ->references('id')
            //     ->on('connections')
            //      ->onDelete('restrict')
            // ->onUpdate('restrict');
                

            $table->timestamps();
        });
        Schema::table('reservations',function(Blueprint $table){

            $table->foreignId('users_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
