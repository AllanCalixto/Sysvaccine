<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
  protected $fillable = [
      'i_nome',
      'i_sobrenome',
      'i_cpf',
      'i_data',
      'i_fone',
      'i_cidade',
      'i_estado',

  ];
}
