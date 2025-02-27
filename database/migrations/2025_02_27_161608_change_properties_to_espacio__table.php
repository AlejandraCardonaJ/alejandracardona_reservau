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
        Schema::table('espacio_', function (Blueprint $table) {
            $table->enum('tipo', ['Aula', 'Sala de Reuniones', 'Cubículo'])->default('Aula')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('espacio_', function (Blueprint $table) {
            $table->string('tipo')->change();
        });
    }
};
