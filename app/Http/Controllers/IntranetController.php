<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Comunicado;
use App\indicadores;
use App\Arquivos;
use DB;
class IntranetController extends Controller
{
    
    public function powerbi(){

        return view('layout.powerbi');
    }

        
    public function videos(){

        return view('layout.videos');
    }


    public function inicio(){

        $allcomunic = Comunicado::orderBy('created_at','desc')->paginate(5);
        $comunicados = Comunicado::orderBy('created_at', 'desc')->paginate(3);
        $docPisa = indicadores::where('local', 'Pisa')->orderBy('created_at','desc')->first();
        $docAra = indicadores::where('local', 'Arapoti')->orderBy('created_at','desc')->first();

        
         return view('welcome', compact('comunicados','allcomunic','docPisa','docAra'));
     }

     public function showComu($id){
        $arq = Comunicado::find($id);
        return view('layout.showcomu', compact('arq'));
     }

     public function arquivo(){
         $arq = Comunicado::orderBy('created_at','desc')->get();
         return view('layout.arquivo', compact('arq'));
     }

     function getFile($filename){
    	$file=Storage::disk('public')->get($filename);
 
		return (new Response($file, 200))
              ->header('Content-Type', 'application/pdf');
    }

    public function beneficios()
    {
        /* Filtro Escala */
        $escAra = Arquivos::where([
            ['local','Arapoti'],
            ['tipo', 'Escala'],
        ])->orderBy('created_at','desc')->first();

        $escPis = Arquivos::where([
            ['local','Pisa'],
            ['tipo', 'Escala'],
        ])->orderBy('created_at','desc')->first();

        /* Filtro Itinerario */
        $itnAra = Arquivos::where([
            ['local','Arapoti'],
            ['tipo', 'Itinerario'],
        ])->orderBy('created_at','desc')->first();

        $itnPis = Arquivos::where([
            ['local','Pisa'],
            ['tipo', 'Itinerario'],
        ])->orderBy('created_at','desc')->first();
        
        /* Filtro Calendario */
        $calendario = Arquivos::where('tipo','Calendario')->orderBy('created_at','desc')->first();

          
        /* Filtro Saude */
        $medAssist = Arquivos::where('tipo','Psaude')->orderBy('created_at','desc')->first();

        $cardC = Arquivos::where('tipo', 'CardapioC')->orderBy('created_at','desc')->first();
        $cardM = Arquivos::where('tipo', 'CardapioM')->orderBy('created_at','desc')->first();
        $cardL = Arquivos::where('tipo', 'CardapioL')->orderBy('created_at','desc')->first();
       
        $pprP = Arquivos::where([
            ['local','Pisa'],
            ['tipo', 'Acordos'],
        ])->orderBy('created_at','desc')->first();

        /* Filtro Itinerario */
        $pprA = Arquivos::where([
            ['local','Arapoti'],
            ['tipo', 'Acordos'],
        ])->orderBy('created_at','desc')->first();

        return view('layout.bene',compact('escAra','escPis','itnAra','itnPis','calendario','medAssist','cardC','cardM','cardL','pprP','pprA'));
    }

    public function treinamento()
    {
        $agenda = Arquivos::where('tipo','Agenda')->orderBy('created_at','desc')->first();
        return view('layout.train',compact('agenda'));
    }

    public function transparencia()
    {
        return view('layout.transparencia');
    }
    public function covid()
    {
        return view('layout.covid');
    }

    public function bemestar()
    {

        $qualidade = Arquivos::where('tipo','QualidadeDeVida')->orderBy('created_at','desc')->first();
        $respsocial = Arquivos::where('tipo','RespSocial')->orderBy('created_at','desc')->first();
        $jornal = Arquivos::where('tipo','Jornal')->orderBy('created_at','desc')->first();
        return view('layout.bemestar', compact('qualidade','respsocial','jornal'));
    }

    public function ssma()
    {
         /* Filtro Cipa */
         $cipAra = Arquivos::where([
            ['local','Arapoti'],
            ['tipo', 'Cipa'],
        ])->orderBy('created_at','desc')->first();

        $cipPis = Arquivos::where([
            ['local','Pisa'],
            ['tipo', 'Cipa'],
        ])->orderBy('created_at','desc')->first();

        $escMed = Arquivos::where('tipo','Escalamed')->orderBy('created_at','desc')->first();

        $brigada = Arquivos::where('tipo','Brigada')->orderBy('created_at','desc')->first();

        return view('layout.ssma',compact('cipAra','cipPis','escMed','brigada'));
    }

}
