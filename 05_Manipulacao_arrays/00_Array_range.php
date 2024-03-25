<?php
//----------------Array range---------
$array = range(1, 20, 2);// terceiro parametro define quantos itens serão mostrados (de 2 em 2). 
foreach($array as $item) {
    echo $item."<br/>";
}

//-------Array range com letras-------
//Cria uma array com sequencia de "A" a "g";
$array = range("a", "g",) 
foreach($array as $item) {
    echo $item."<br/>";
}

//------------KEY_EXISTS---------------

//SERVE PARA PODER SABER SE UMA KEY EXISTE
$array = [
    'nome' => 'matheus',
    'idade' => 25,
    'empresa'=> 'b7web',
    'cor' => 'vermelho',
    'profissão'=> 'programador'
];

if(key_exists('idade', $array)) {
    $idade = $array['idade']; 
    echo $idade." anos";
} else {
    echo "Não tem idade";
}
//------------- array_keys e array_values --------

$array = [
    'nome' => 'matheus',
    'idade' => 25,
    'empresa'=> 'b7web',
    'cor' => 'vermelho',
    'profissão'=> 'programador'
];

$chaves = array_keys($array); //cria um novo array somente com as chaves do array. 
$values = array_values($array); //cria um novo array somente com os valores do array. 

//----------------- Desconstrução de array ------------

$arry = ['matheus', 90, 'café', 'azul'];

lista($nome, $idade, $bebida, $cor) = $array;
echo $nome." tem ".$idade." anos e gosta de tomar ".$bebida." com a cor ".$cor;//