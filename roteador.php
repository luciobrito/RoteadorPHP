<?php
class Rota{
    public $uri;
    public $arquivo;
    public $metodo;
    function __construct($uri, $arquivo, $metodo)
    {
        $this->uri = $uri;
        $this->arquivo = $arquivo;
        $this->metodo = $metodo;
    }
}
class Roteador{
    private $rotas_validas = array();

    private function adicionarRota(Rota $new_route) : void{
        array_push($this->rotas_validas, $new_route);
    }

    public function post(string $url, string $arquivo) : void{
        $rota = new Rota($url, $arquivo, 'POST');
        $this->adicionarRota($rota);
    }
    public function get(string $url, string $arquivo) : void{
        $rota = new Rota($url, $arquivo, 'GET');
        $this->adicionarRota($rota);
    }
    public function delete($url, $arquivo){
       $rota = new Rota($url, $arquivo, 'DELETE');
       $this->adicionarRota($rota);
    }
    
    /*protected function router($rota, $arquivo){
        //TODO: Colocar suporte aos parâmetros das rotas.
        $request = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
        //Divide a url em duas partes, sendo [0] a rota e [1] a query
        $valores = explode("?",$request);
        if($rota == $valores[0]) include_once __DIR__ . "/$arquivo";
        
    }*/
    public function run(){
       /*
        if(!in_array($valores[0], $this->rotas_validas)) include_once __DIR__ . "/not_found.php";*/
        $request = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
        $valores = explode("?",$request);
        $lista_urls = $this->filtrarRotas($this->rotas_validas, "uri");
        if(in_array($valores[0], $lista_urls)){
            $indice = null;
            for($i = 0; $i < sizeof($this->rotas_validas); $i++){
                //Se o metodo for igual a url salvar o indice para retornar os valores
                //Se a url existir mas o metodo não for igual, retornar metodo não permitido
            }
        }
        else include_once __DIR__ . "/not_found.php";
    }
    private function filtrarRotas($rotas,$valor){
        $valores = array();
        foreach($rotas as $rota){
            array_push($valores, $rota->$valor);
        }
        return $valores;
    }

}