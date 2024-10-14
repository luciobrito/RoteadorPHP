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
        if($_SERVER['REQUEST_METHOD'] == 'DELETE') $this->router($url, $arquivo);
        else http_response_code(405);
    }
    
    protected function router($rota, $arquivo){
        //TODO: Colocar suporte aos parâmetros das rotas.
        $request = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
        //Remove a query da url
        $valores = explode("?",$request);
        if($rota == $valores[0]) include_once __DIR__ . "/$arquivo";
    }

}