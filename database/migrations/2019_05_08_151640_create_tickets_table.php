<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug_ticket')->unique();
            $table->string('titre_ticket');
            $table->integer('service')->unsigned();
            $table->text('details');
            $table->string('etat')->default('non résolu');
            $table->integer('id_technicien')->nullable();
            $table->integer('id_client');
            $table->foreign('id_client')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_technicien')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('tickets');
    }
}
