<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servico;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $servicos = [
            ['carro_id'=>1,'mecanico_id'=>1,'tipo'=>'Troca de Óleo','descricao'=>'Troca de óleo e filtro do motor','data_inicio'=>'2026-10-01','data_fim'=>'2026-10-01','status'=>'concluido','valor_mao_obra'=>80.00,'valor_pecas'=>150.00,'desconto'=>10.00],
            ['carro_id'=>2,'mecanico_id'=>2,'tipo'=>'Suspensão','descricao'=>'Revisão e manutenção da suspensão','data_inicio'=>'2026-10-02','data_fim'=>'2026-10-03','status'=>'concluido','valor_mao_obra'=>120.00,'valor_pecas'=>250.00,'desconto'=>20.00],
            ['carro_id'=>3,'mecanico_id'=>3,'tipo'=>'Motor','descricao'=>'Revisão geral do motor','data_inicio'=>'2026-10-03','data_fim'=>null,'status'=>'em_execucao','valor_mao_obra'=>300.00,'valor_pecas'=>450.00,'desconto'=>30.00],
            ['carro_id'=>4,'mecanico_id'=>4,'tipo'=>'Elétrica','descricao'=>'Revisão do sistema elétrico','data_inicio'=>'2026-10-06','data_fim'=>null,'status'=>'agendado','valor_mao_obra'=>180.00,'valor_pecas'=>90.00,'desconto'=>0.00],
            ['carro_id'=>5,'mecanico_id'=>5,'tipo'=>'Injeção Eletrônica','descricao'=>'Limpeza e revisão da injeção eletrônica','data_inicio'=>'2026-10-07','data_fim'=>null,'status'=>'cancelado','valor_mao_obra'=>150.00,'valor_pecas'=>70.00,'desconto'=>0.00],
        ];

        foreach ($servicos as $s) {
            Servico::create($s);
    }
  }
}
