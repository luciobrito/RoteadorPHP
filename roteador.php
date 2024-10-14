<?php

class Roteador{
  
    public function post($url, $arquivo){
        if($_SERVER['REQUEST_METHOD'] == 'POST') $this->router($url, $arquivo);
        else http_response_code(405);
    }
    public function get($url, $arquivo){
        if($_SERVER['REQUEST_METHOD'] == 'GET') $this->router($url, $arquivo);
        else http_response_code(405);
    }
    public function delete($url, $arquivo){

    }
    
    protected function router($url, $arquivo){
        //TODO: Colocar suporte aos parâmetros das rotas.
        $request = $_SERVER['REQUEST_URI'];
        if($url == $request) include_once __DIR__ . "/$arquivo";
    }

}