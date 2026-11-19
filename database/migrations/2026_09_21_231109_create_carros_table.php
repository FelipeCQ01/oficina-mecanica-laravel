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
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 10)->unique();
            $table->string('marca');
            $table->string('modelo');
            $table->smallInteger('ano');
            $table->string('cor')->nullable();
            $table->string('proprietario_nome');
            $table->string('proprietario_telefone', 20);
            $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
