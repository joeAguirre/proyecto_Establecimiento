<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('categorias_id')->constrained()->onDelete('cascade');
            $table->string('imagen_principal');
            $table->string('direccion');
            $table->string('barrio');
            $table->string('lat');
            $table->string('lng');
            $table->string('telefono');
            $table->text('descripcion');
            $table->time('hora-apertura');
            $table->time('hora-cierre');
            $table->uuid('uuid');
            $table->foreignId('users_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('establecimientos');
    }
}
