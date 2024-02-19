<?php

use Brick\Math\BigInteger;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('skins', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->BigInteger('coleccion_id')->unsigned();

            $table->double('float')->unsigned();
            $table->enum('desgaste', ['Recién fabricado', 'Casi nuevo', 'Algo desgastado', 'Bastante desgastado', 'Deplorable']);

            $table->double('precio_recomendado')->unsigned();

            $table->timestamps();
            $table->foreign('coleccion_id')->references('id')->on('colecciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skins');
    }
};
