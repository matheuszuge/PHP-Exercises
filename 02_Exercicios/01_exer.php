<?php

//exercício 1: Arrays e Loops

//a) Crie um array chamado $paises com os nomes de cinco países diferentes.

$paises = array=[
    "gales", 
    "frança", 
    "italia", 
    "brasil", 
    "venezuela"]

//b) Utilize um loop for para imprimir cada país do array.

$paises = array=["gales", 
    "frança", 
    "italia", 
    "brasil", 
    "venezuela"
];
foreach ($paises as $pai) {
    echo $pai."br"
}
//Exercício 2: Estruturas de Controle
//a) Crie uma função chamada verificarPar que aceita um número como parâmetro e imprime "Par" se o número for par e "Ímpar" se for ímpar.

function verificarPar($numero) {
        if ($numero % 2 == 0) {
        echo "par"
    else {
        echo "impar";
    }
    }
}
$numeroTeste = 8;
verificaPar($numeroTeste);

//b) Teste a função com diferentes números.

function verificarPar($numero) {
        if ($numero % 2 == 0) {
        echo "par"
    else {
        echo "impar";
    }
    }
}
$numeroTeste = 8;
verificaPar($numeroTeste);

//Exercício 3: Manipulação de Strings

//a) Declare uma string chamada $frase com o valor "Estou aprendendo PHP".

$frase = "Estou aprendendo PHP";

//b) Use a função explode para dividir a frase em um array de palavras.

//c) Imprima cada palavra do array em uma linha.

//Exercício 4: Funções e Arrays

//a) Crie uma função chamada mediaArray que aceita um array de números como parâmetro e retorna a média dos números.

function mediaArray($numeros) {
    $num == $numeros + $numeros;
    $num2 = $numeros % $num;
    echo $num;
}
$numeros = array[
    "2", 
    "2", 
    "3", 
    "4"
];
//b) Teste a função com um array de números de sua escolha.

//Exercício 5: Estruturas de Controle e Strings

//a) Crie uma função chamada inverterString que aceita uma string como parâmetro e retorna a string invertida.

//b) Utilize a função para inverter a string "PHP é divertido".

//Instruções para Responder:

//Escreva o código PHP para cada parte do exercício.
//Se precisar explicar o raciocínio ou a lógica por trás do código, sinta-se à vontade para fazer isso.
//Teste as funções ou loops com exemplos para garantir que funcionem corretamente.
//Esses exercícios visam praticar diferentes aspectos do PHP, incluindo arrays, loops, funções e manipulação de strings. Boa prática!

//Exercicios/anotações b7web

//Exemplo de array spread (php 7.4)
<?php
$bolo1 = [
    'açucar'
    'farinha'
    'ovo'
    'leiote'
    'fermento'
];

$bolo2 = [
    ...$bolo1,
    'corante'
];

echo $bolo2[5];

//exemplo lista 3 com print_r

$lista1 = [
    'jose', 
    'carlos', 
    'maria',
    'pedro'
];
$lista2 = [
    'flavio', 
    'antonio', 
    'jusara', 
    'xuxa'
];
$lista3 = [
    ...$lista1, 
    ...$lista2
];

print_r($lista3);

//exercicio array corrigir codigo

$lista = [
    'nome' => 'matheus',
    'idade' => '90',
    'atributos' => [
    'força' => '60',
    'agilidade' => '80',
    'deztreza' => '50',
    'vida' => '1000',
    'mana' => '928',
    ]
];

//=> é atribulo de um array associativo

echo "nome: " .$lista['nome'] . "<br/>";
echo "força: " .$lista['atributos']['força'] . "<br/>";
echo "vida: " .$lista['atributos']['vida'];

//---- exercico de variavel b7 web ------//

$idiade = 40;

if($idade >= 18){
    echo 'menor de idade';
} else {
    echo 'maior de idade'
}

//exercicio de operador ternario

echo ($idade <18) ? 'menor de idade' : 'maior de idade';
$idade = ($idade <18) ? 'menor de idade' : 'maior de idade';
$idade = ($idade <18) ? false : true;

/>