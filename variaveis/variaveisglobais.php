<?php
/*
Explicação e anotações sobre variáveis globais dentro do  PHP.
*/

$nome = $_GET["a"];

//var_dump($nome);

//$ip = $_SERVER["REMOTE_ADDR"];

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>