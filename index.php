<?php
//Arquivo de para testar o roteador
include_once "roteador.php";

//Necessário colocar '/' antes da rota
$roteador = new Roteador();

$roteador->get('/user', 'teste/user.php');
$roteador->post('/home', 'teste/home.php');
$roteador->run();