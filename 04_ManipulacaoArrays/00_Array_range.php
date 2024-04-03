<?php
//---------------- Array range ---------
// Cria um array com números de 1 a 20, incrementando de 2 em 2
$array = range(1, 20, 2); // O terceiro parâmetro define de quantos em quantos números serão mostrados (de 2 em 2).
foreach ($array as $item) {
    echo $item."<br/>";
}

//------- Array range com letras -------
// Cria um array com uma sequência de letras de "a" a "g"
$array = range("a", "g");
foreach ($array as $item) {
    echo $item."<br/>";
}

//------------ KEY_EXISTS --------------
// Serve para verificar se uma chave existe em um array associativo
$array = [
    'nome' => 'matheus',
    'idade' => 25,
    'empresa' => 'b7web',
    'cor' => 'vermelho',
    'profissão' => 'programador'
];

if (key_exists('idade', $array)) {
    $idade = $array['idade']; 
    echo $idade." anos";
} else {
    echo "Não tem idade";
}

//------------- array_keys e array_values --------
// Cria novos arrays contendo apenas as chaves e os valores do array original
$array = [
    'nome' => 'matheus',
    'idade' => 25,
    'empresa' => 'b7web',
    'cor' => 'vermelho',
    'profissão' => 'programador'
];

$chaves = array_keys($array); // Cria um novo array contendo somente as chaves do array original
$values = array_values($array); // Cria um novo array contendo somente os valores do array original

//----------------- Desconstrução de array ------------
// Desconstrói o array em variáveis individuais
$arry = ['matheus', 90, 'café', 'azul'];

list($nome, $idade, $bebida, $cor) = $array;
echo $nome." tem ".$idade." anos e gosta de tomar ".$bebida." com a cor ".$cor;
?>
