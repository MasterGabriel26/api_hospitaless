<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hospitales', function (Blueprint $table) {
            $table->id('hospital_id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('pais');
            $table->string('teléfono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitales');
    }
};
