<?php

namespace App\Http\Controllers;
use App\Util\LogConsulta;
use Illuminate\Http\Request;

class produtoController extends Controller{
    public function produto(){
        $titulo="PRODUTOS";
        $rodape=date('Y'). 'Todos os direitos reservados';
        $caminho = '../storage/app';
       $log = new LogConsulta($caminho);
       $ip = $_SERVER['REMOTE_ADDR'];
       $pagina = "produto";
       $data = $log->registrar($ip, $pagina);
        
       return view('site.produto', compact('titulo','rodape'));
    }
}


