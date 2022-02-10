<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PublicacionesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Publicaciones', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('extracto');
            $table->string('contenido');
            $table->boolean('caducable');
            $table->boolean('comentable');
            $table->dateTime('creacion');
            $table->string('acceso');
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Publicaciones');
    }
}
