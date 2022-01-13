<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indicadores;


class IndicadoresController extends Controller
{
    public function index()
    {
        $arq = Indicadores::all();
        return view('dashboard.sgi',compact('arq'));
    }
    public function sgiDel($id){
        $esc = Indicadores::find($id);
        $esc->delete();
        return redirect()->back()->with('success', 'Arquivo deletado com sucesso.'); 
    }

    public function store(Request $request)
    {
        
        // Handle File Upload
        if($request->hasFile('arquivos')){
            // Get filename with the extension
            $filenameWithExt = $request->file('arquivos')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('arquivos')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('arquivos')->storeAs('public', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }
        //save in database
        $itens = Indicadores::create([
            'nome' => mb_strtolower($request->nome),
            'local' => $request->local,
            'arquivo' => $fileNameToStore
        ]);
        $request->session()->flash(
            'mensagem',
            "Item {$itens->id} criad@ com sucesso {$itens->nome}"
        );
        return redirect()->back();
    }
}
