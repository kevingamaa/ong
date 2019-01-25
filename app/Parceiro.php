<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
    protected $fillable = ['nome', 'logo', 'refencia'];
}
