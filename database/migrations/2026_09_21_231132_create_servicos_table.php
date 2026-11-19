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
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            
        // FKs: Serviço pertence a um Carro e a um Mecânico
            $table->foreignId('carro_id')
                ->constrained('carros')
                ->cascadeOnDelete();

            $table->foreignId('mecanico_id')
                ->constrained('mecanicos')
                ->cascadeOnDelete();
        
        // Campos do serviço (conforme diagrama)
            $table->string('tipo');
            $table->text('descricao')->nullable();
            $table->date('data_inicio')->nullable();
            $table->date('data_fim')->nullable();
            $table->enum('status',
                ['agendado','em_execucao','concluido','cancelado']
            )->default('agendado');

        // valores
        $table->decimal('valor_mao_obra', 10, 2)->default(0);
        $table->decimal('valor_pecas', 10, 2)->default(0);
        $table->decimal('desconto', 10, 2)->default(0);
        

        $table->timestamps();

        // Índices úteis para filtros
       $table->index(['status', 'data_inicio']);
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
