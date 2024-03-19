<?php
//Sequência PHP
//Uma string é uma sequência de caracteres, como "Olá, mundo!".
//Uma string pode ser qualquer texto entre aspas. Você pode usar aspas simples ou duplas:

$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);


Uma string é uma sequência de caracteres, como "Olá, mundo!".

Strings

Strings em PHP são colocadas entre aspas duplas ou aspas simples.

echo "Hello";
echo 'Hello';

//Nota Há uma grande diferença entre aspas duplas e aspas simples em PHP.
//As aspas duplas processam caracteres especiais, as aspas simples não.


/* Você pode usar aspas duplas ou simples, mas deve estar ciente das diferenças entre as duas.

Strings entre aspas duplas executam ações em caracteres especiais.

Por exemplo, quando há uma variável na string, ela retorna o valor da variável:*/

$x = "John";
echo "Hello $x";

//Literais de string entre aspas simples retornam a string como ela é:

$x = "John";
echo 'Hello $x';

//---------Comprimento da String ----------//

//Retorne o comprimento da string "Olá, mundo!":

echo strlen("Hello world!");

/*Contagem de palavras
A função PHP str_word_count()conta o número de palavras em uma string.

Conte o número de palavras na string "Olá, mundo!":*/

echo str_word_count("Hello world!");

/* Pesquisar texto dentro de uma string
A função PHP strpos()procura um texto específico dentro de uma string.

Se uma correspondência for encontrada, a função retornará a posição do 
caractere da primeira correspondência. Se nenhuma correspondência for encontrada, retornará FALSE.*/

Procure o texto "mundo" na string "Olá, mundo!":

echo strpos("Hello world!", "world");

//Dica1: A posição do primeiro caractere em uma string é 0 (não 1).
//Dica2: Use listas de string (não tem como decorar todas as funções nativas de string do php)


//-------------MODIFICAR STRING-------------//

//Maiúsculas
//Obtenha seu próprio servidor PHP
//A strtoupper()função retorna a string em maiúsculas:

$x = "Hello World!";
echo strtoupper($x);

//Minúsculas
//A strtolower()função retorna a string em letras minúsculas:

$x = "Hello World!";
echo strtolower($x);

//Substituir sequência
//A str_replace()função PHP substitui alguns caracteres por outros caracteres em uma string.

//Substitua o texto "Mundo" por "Dolly":

$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

/*Reverter uma string
A função PHP strrev()inverte uma string.

Inverta a string "Hello World!":*/

$x = "Hello World!";
echo strrev($x);

/* Remover espaço em branco
Espaço em branco é o espaço antes e/ou depois do texto real, e muitas vezes você deseja remover esse espaço.

Remove trim()qualquer espaço em branco do início ou do final:*/

$x = " Hello World! ";
echo trim($x);

// -------------- Converter String em Array ------------//
/*A função PHP explode()divide uma string em um array.

O primeiro parâmetro da explode()função representa o “separador”. O "separador" especifica onde dividir a string.

Nota: O separador é obrigatório.

Divida a string em um array. Use o caractere de espaço como separador:*/

$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

/*
Result:
Array ( [0] => Hello [1] => World! )
*/

// ---------- Concatenar Strings ----------//

/*Concatenação de Strings
Para concatenar ou combinar duas strings você pode usar o .operador:

Obtenha seu próprio servidor PHP*/

$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;

/* O resultado do exemplo acima é HelloWorld, sem espaço entre as duas palavras.

Você pode adicionar um caractere de espaço como este:*/

$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z;


/* Uma maneira melhor e mais fácil é usar o poder das aspas duplas.

Ao colocar as duas variáveis ​​entre aspas duplas com um espaço em branco entre elas, 
o espaço em branco também estará presente no resultado:*/

$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;



?>

