<?php

namespace app\Util;

class LogConsulta {

    private $caminho;

    public function __construct($caminho) {
        $this->caminho = $caminho;
    }

    public function registrar($ip, $pagina) {

        $data = date('d/m/Y H:i');
     
        
        if (file_exists(''.$this->caminho.'/log_geral.txt')){
            $dadosAtuais = $this->capturar();
            $dadosAtuais .= "\n".$data;
            $this->gravarArquivo($dadosAtuais, $ip, $pagina);
            
        } else {
            $this->gravarArquivo($data, $ip, $pagina);
        }

        return $data;
    }
    
    private function gravarArquivo($data, $ip, $pagina){
        file_put_contents($this->caminho.'/log_geral.txt', $data. " - ". $ip ." - ". $pagina);
        
    }
    
    public function capturar(){
        
        $dados = file_get_contents($this->caminho.'/log_geral.txt');
        return $dados;
    }

}
