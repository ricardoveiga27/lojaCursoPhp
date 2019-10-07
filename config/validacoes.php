<?php
$erros=[];

function validaNome($nome){
    global $erros;
    if (strlen($nome) == 0){
        array_push($erros, "Falta inserir nome");
    }
}

function validaCpf($cpf){
    global $erros;
    if (strlen($cpf) < 11){
        array_push($erros, "Falta inserir cpf");
    }
}
 
    
?>