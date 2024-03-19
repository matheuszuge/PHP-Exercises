<?php
    $numeros = [
    1,
    3,
    9,
    4,
    5,
    8,
    2,
    6,
    7,
    0
];
    for ($i=0; $i < 10; $i++) { 
        echo "Chave: " . $i . "Valor: " . $numeros[$i];
    }

    function soma ($n1, $n2){
        soma = $n1 + $n2;
        return soma;
    }

    $n1 = 1
    $n2 = 3

    $resultado = soma($n1 + $n2);
    echo $resultado;
/*  

Escreva um script PHP que imprima "Olá, mundo!" na tela.

*/
echo "ola, mundo";

/* Crie uma variável $nome e atribua a ela seu próprio nome. Em seguida, imprima "Olá, [seu nome]!".
*/
$nome = "matheus";

echo "ola", $nome;

/*
Escreva um programa PHP que calcule a soma dos números de 1 a 10 e exiba o resultado.
*/

$soma = $n1 + $n2;

$n1 = 1;
$n2 = 10;

echo $soma;

//Crie um script PHP que verifique se um número é par ou ímpar e imprima uma mensagem correspondente.

function verificaPar($n1, $n2) {
    if ($n1 % $n2 == 0) {
        return "par";
    } else {
        return "ímpar";
    }
}
echo verificaPar(2, 4); // This will output "par"

//Escreva um script PHP que converta uma temperatura de Celsius para Fahrenheit. A fórmula é: Fahrenheit = (Celsius * 9/5) + 32.
// echo não retorna. 

function temp($celsius){
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}
$celsius = 4;
echo "Temperatura em Fahrenheit: " . temp($celsius);


//Faça um programa PHP que imprima os números de 1 a 100, substituindo os múltiplos de 3 por "Fizz", os múltiplos de 5 por "Buzz" e os múltiplos de ambos por "FizzBuzz".

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}

//Escreva uma função em PHP que receba um número como parâmetro e retorne true se o número for primo e false caso contrário.

function primo($numero)
    if ($numero )


//Crie um script PHP que receba um número inteiro e verifique se ele é positivo, negativo ou zero.

function verificaPositivo($num) {
    if ($num < 0) {
        return "negativo"
    } elseif ($num == 0) {
        return "zero":
    } else {
        return "positivo"
    }  
}

echo verificaPositivo(4)

//Faça um programa PHP que leia uma string e conte o número de caracteres dessa string.

function contarCaracteres($palavra) {
    retunr strlen($palavra);
}
echo contarCaracteres("revolver");

//Escreva um script PHP que receba um array de números e retorne o maior número presente no array.

function encontrarMaiorNumero($numeros) {
    $maior_numero = max($numeros);
    return $maior_numero;
}

$array_numeros = array(10, 5, 8, 20, 15);
echo "O maior número no array é: " . encontrarMaiorNumero($array_numeros);


// EXERCICIOS DE LOOP


$numero = 0;

while ($numero = 10) {
    echo "N: ".numero."<br/>";

    $numero += 1;
}


for ($i=0;$i<10;$i++){
    echo $i.'<br/>';
}



$ingredientes = [
    'acucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó',

];

foreach ($igredientes as $chave => $igrediente) {
    echo "item: ".$chave.": ".$igrediente."<br/>";
}

$ingredientes = [
    'acucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó',

];

echo '<ul>'

foreach ($igredientes as $igrediente) {
    echo '<li>'.$igrediente.'</li>':
}
echo '</ul>'

//-------------------------------


//exercicios de funções























?>

