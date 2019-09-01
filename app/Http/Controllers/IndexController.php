<?php

namespace App\Http\Controllers;
use App\Util\LogConsulta;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $titulo="SEENAI";
        $rodape=date('Y'). 'Todos os direitos reservados';
       $caminho = '../storage/app';
       $log = new LogConsulta($caminho);
       $ip = $_SERVER['REMOTE_ADDR'];
       $pagina = "home";
       $data = $log->registrar($ip, $pagina);
        return view('site.index', compact('titulo','rodape'));
        
         
    }
}
