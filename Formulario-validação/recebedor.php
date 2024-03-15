<?php

$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_NUMBER_INT);// somente o dado sendo numero inteiro 
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);

//filter_input -> funciona para dados enviados 
//filter_var -> funciona para variaveis

if($nome && $email) {
    
    echo 'Nome: '.$nome."<br/>";
    echo 'Idade: '.$idade."<br/>";
    echo 'Email: '.$email;

} else {
   header("location: index.php");
   exit;
}

