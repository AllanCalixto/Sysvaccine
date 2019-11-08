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
      'i_vacina_dose',
      'i_primeira_dose',
      'i_segunda_dose',
      'i_terceira_dose',
      'i_primeiro_reforco',
      'i_segundo_reforco',

  ];
}
