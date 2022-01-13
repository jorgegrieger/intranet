<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class indicadores extends Model
{
    public $fillable = ['nome', 'arquivo', 'local','created_at'];
}