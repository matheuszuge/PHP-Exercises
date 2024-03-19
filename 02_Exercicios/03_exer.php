<?php
//Escreva um programa PHP que imprima "Olá, Mundo!" na tela.

echo "hello world";

//Crie um programa PHP que declare duas variáveis, atribua valores a 
//elas e então imprima a soma dessas variáveis.

$n1 = 12;
$n2 = 134;

$soma = $n1 + $n2;
echo "valor de soma é igual a: ".$soma;

ou somente 

echo "valor de soma é igual a: ".($n1 + $n2);

//Escreva um programa PHP que determine se um número é par ou ímpar.

function verificaPar($num){
    if($num % 2 == 0) {
        echo "é par";
    } else {
        echo "é impar";
    }
}

echo verificaPar(10)

//Desenvolva um programa PHP que calcule o fatorial de um número.

$numero = 10;
$resultado = 1;

while ($numero > 0) {
    $resultado *= $numero;
    $numero -= 1;
}

echo "O fatorial de 10 é: " . $resultado;


Resultado esponencial de 10

//Crie um programa PHP que receba uma string e verifique se ela é um palíndromo.

function isPalindrome($str) {
    $str = strtolower(str_replace(' ', '', $str));
    
    if ($str == strrev($str)) {
        return true;
    } else {
        return false;
    }
}

//Escreva um script PHP que imprima os números de 1 a 100, substituindo os múltiplos de 3 por "Fizz", os múltiplos de 5 por "Buzz" e os múltiplos de ambos por "FizzBuzz".

for($i=0, $i<100, $i++);
    if($i % 3 == 0) {
        echo 'fizz'
    } elseif ($i $ 5 == 0) {
        echo 'buzz';
    } elseif ($i % 3 == 0 && $i % 5 == 0){
        echo 'FizzBuzz'
    }

//Desenvolva um programa PHP que converta uma temperatura de Celsius para Fahrenheit e vice-versa.

function calcTemp($celcios) {
    echo 'fahrenheit é = '.$celcios * (5/9) + 32;   
}

calcTemp(18);

//Crie um programa PHP que receba um número inteiro e determine se é primo.

function calcPrimo($numero) {
    $divisores = 0; 

    
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) { 
            $divisores++; 
        }
    }

    if ($divisores == 2) {
        echo "$numero é primo.";
    } else {
        echo "$numero não é primo.";
    }
}

calcPrimo(13);

?>