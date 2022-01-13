<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comunicado;

class ComunicadoController extends Controller
{
    public function salvar(Request $request){

        Comunicado::create($request->all());
    


        return redirect('/admin');
    }
}
