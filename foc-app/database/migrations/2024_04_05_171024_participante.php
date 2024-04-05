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
        Schema::create('Participantes', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('curso_id');
           
            $table->string('status');

            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Participantes');
    }
};
