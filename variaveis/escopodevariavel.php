<?php

$nome = "Glaucio";

function teste() {

    global $nome;
    //o global permite q sejam a mesma variável dentro e fora da função.
    echo $nome;
    // a variável $nome não e a mesma dentro e fora da função.
}

function teste2() {
    echo $nome."agora no teste2";
    
}

teste();

teste2();

?>