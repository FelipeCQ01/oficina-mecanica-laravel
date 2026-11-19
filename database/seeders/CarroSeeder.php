<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carro;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $carros = [
            ['placa'=>'ABC1D23','marca'=>'Toyota','modelo'=>'Subaru','ano'=>'2022','cor'=>'Prata','proprietario_nome'=>'João Silva','proprietario_telefone'=>'21999990001'],
            ['placa'=>'DEF4G56','marca'=>'Honda','modelo'=>'Subaru','ano'=>'2021','cor'=>'Preto','proprietario_nome'=>'Maria Souza','proprietario_telefone'=>'21999990002'],
            ['placa'=>'GHI7J89','marca'=>'Volkswagen','modelo'=>'Subaru','ano'=>'2020','cor'=>'Branco','proprietario_nome'=>'Carlos Lima','proprietario_telefone'=>'21999990003'],
            ['placa'=>'JKL1M23','marca'=>'Chevrolet','modelo'=>'SUbaru','ano'=>'2023','cor'=>'Vermelho','proprietario_nome'=>'Fernanda Alves','proprietario_telefone'=>'21999990004'],
            ['placa'=>'NOP4Q56','marca'=>'Fiat','modelo'=>'Subaru','ano'=>'2022','cor'=>'Cinza','proprietario_nome'=>'Lucas Martins','proprietario_telefone'=>'21999990005'],
        ];

        foreach ($carros as $c) {
            Carro::create($c);
        }
    }
}
