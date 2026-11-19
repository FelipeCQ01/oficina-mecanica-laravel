<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = ['carro_id','mecanino_id','tipo','descricao','data_inicio','data_fim','status','valor_mao_obra','valor_pecas','desconto'];
}
