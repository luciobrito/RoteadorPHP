<?php
//Arquivo de para testar o roteador
include_once "roteador.php";

//Necessário colocar '/' antes da rota
$roteador = new Roteador();
$roteador->get('/home', 'teste/home.php');
$roteador->post('/user', 'teste/user.php');
$roteador->get('/user', 'teste/user.php');
$roteador->run();