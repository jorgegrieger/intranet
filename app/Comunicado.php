<?php

namespace App;


use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;
use Illuminate\Database\Eloquent\Model;

class Comunicado extends Model
{
    use HasTrixRichText;
    
    protected $guarded = [];
}