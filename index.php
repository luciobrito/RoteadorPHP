<?php
//Arquivo de para testar o roteador
include_once "roteador.php";

//Necessário colocar '/' antes da rota
$roteador = new Roteador();
$roteador->get('/home', 'home.php');
$roteador->get('/user', 'user.php');