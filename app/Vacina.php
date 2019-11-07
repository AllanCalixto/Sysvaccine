<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacina extends Model
{
  protected $fillable = [
      'nomevacina',
      'dose',
      'data',

  ];
}
