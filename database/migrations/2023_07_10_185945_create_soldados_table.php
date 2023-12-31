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
        Schema::create('soldados', function (Blueprint $table) {
            $table->id();
            $table->string('nom_s');
            $table->string('apellidos_s');
            $table->integer('cod_ce1');
            $table->integer('num_com1');
            $table->integer('cod_c2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldados');
    }
};
