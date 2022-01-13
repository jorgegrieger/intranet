<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arquivos extends Model
{
    public $fillable = ['nome', 'arquivo', 'local','tipo','created_at'];
}