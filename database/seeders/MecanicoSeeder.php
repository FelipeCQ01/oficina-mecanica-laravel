<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mecanico;

class MecanicoSeeder extends Seeder
{
    public function run(): void
    {
        $mecanicos = [
            ['nome'=>'Ana Souza','registro'=>'MEC001','especialidade'=>'Freios','telefone'=>'21999990001'],
            ['nome'=>'Bruno Lima','registro'=>'MEC002','especialidade'=>'Suspensão','telefone'=>'21999990002'],
            ['nome'=>'Carla Martins','registro'=>'MEC003','especialidade'=>'Motor','telefone'=>'21999990003'],
            ['nome'=>'Diego Ramos','registro'=>'MEC004','especialidade'=>'Elétrica','telefone'=>'21999990004'],
            ['nome'=>'Eduarda Nunes','registro'=>'MEC005','especialidade'=>'Injeção Eletrônica','telefone'=>'21999990005'],
        ];

        foreach ($mecanicos as $m) {
            Mecanico::create($m);
        }
    }
}
