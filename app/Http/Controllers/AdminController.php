<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Comunicado;
use App\indicadores;
use App\Arquivos;
use DB;
class AdminController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}

    public function index(){

        return view('dashboard.index');
    }
    public function comunicado(){


        $arq = Comunicado::all();
 
         return view('dashboard.comunicado', compact('arq'));
     }
     public function visualizar($id){

        $arq = Comunicado::find($id);
 
         return view('dashboard.visualizar', compact('arq'));
     }

     public function comuDel($id){
         $arq = Comunicado::find($id);
         $arq->delete();
         return redirect()->back()->with('success', 'Arquivo deletado com sucesso.'); 
     }

     public function show($id)
     {  
         $where = array('id' => $id);
         $arq  = Comunicado::where($where)->first();
 
         return Response::json($arq);
     }

    public function escala(){
        $arq = Arquivos::where('tipo','Escala')->get();
        return view('dashboard.escala', compact('arq'));
    }
    
    public function arqDel($id){
        $esc = Arquivos::find($id);
        $esc->delete();
        return redirect()->back()->with('success', 'Arquivo deletado com sucesso.'); 
    }

    public function itinerario(){
        $arq = Arquivos::where('tipo','Itinerario')->get();
        return view('dashboard.itinerario', compact('arq'));
    }

    public function agenda(){
        $arq = Arquivos::where('tipo','Agenda')->get();
        return view('dashboard.agenda', compact('arq'));
    }
    
    public function feriados(){
        $arq = Arquivos::where('tipo','Calendario')->get();
        
        return view('dashboard.feriados',compact('arq'));
    }

    public function acordosppr(){
        $arq = Arquivos::where('tipo','Acordos')->get();
        
        return view('dashboard.acordosppr',compact('arq'));
    }

    public function cardapios(){
        $arq = Arquivos::whereIn('tipo',['CardapioC','CardapioM','CardapioL'])->get();
        
        return view('dashboard.cardapios',compact('arq'));
    }

    public function medassist(){
        $arq = Arquivos::where('tipo','Psaude')->get();
        return view('dashboard.medassist',compact('arq'));
    }

    public function qualidadevida(){
        $arq = Arquivos::where('tipo','QualidadeDeVida')->get();
        return view('dashboard.qualidadevida',compact('arq'));
    }

    public function respsocial(){
        $arq = Arquivos::where('tipo','RespSocial')->get();
       
        return view('dashboard.respsocial',compact('arq'));
    }
    public function jornal(){
        $arq = Arquivos::where('tipo','Jornal')->get();
        return view('dashboard.jornal',compact('arq'));
    }
    
    public function cipa(){
        $arq = Arquivos::where('tipo','Cipa')->get();
        return view('dashboard.cipa',compact('arq'));
    }

    public function escalamed(){
        $arq = Arquivos::where('tipo','Escalamed')->get();
        return view('dashboard.escalamed',compact('arq'));
    }
    
    public function brigada(){
        $arq = Arquivos::where('tipo','Brigada')->get();
        return view('dashboard.brigada',compact('arq'));
    }


     function getFile1($filename){
    	$file=Storage::disk('public')->get($filename);
 
		return (new Response($file, 200))
              ->header('Content-Type', 'application/pdf');
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
        $itens = Arquivos::create([
            'nome' => $request->nome,
            'local' => $request->local,
            'tipo' => $request->tipo,
            'arquivo' => $fileNameToStore
        ]);
        $request->session()->flash(
            'mensagem',
            "Item {$itens->id} criad@ com sucesso {$itens->nome}"
        );
        return redirect()->back();
    }
}
