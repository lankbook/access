<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utilisateur_model extends Model
{
  protected $fillable = [
       'email', 'pass1', 'pass2'
  ];
}
