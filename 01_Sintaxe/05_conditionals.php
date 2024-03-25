<?php 
/* PHP Conditional Statements

Muitas vezes, quando você escreve código, deseja executar ações diferentes 
para condições diferentes. Você pode usar instruções condicionais em seu código para fazer isso.

Em PHP temos as seguintes instruções condicionais:

ifinstrução - executa algum código se uma condição for verdadeira
if...else instrução - executa algum código se uma condição 
for verdadeira e outro código se essa condição for falsa
if...elseif...else instrução - executa códigos diferentes para mais de duas condições
switch instrução - seleciona um dos muitos blocos de código a serem executados */

/* PHP - A instrução if
A ifinstrução executa algum código se uma condição for verdadeira.

Sintaxe*/

if (condition) {
    // codigo que será executado caso a condição seja verdadeira
  }

/*ExemploObtenha seu próprio servidor PHP
Saída "Tenha um bom dia!" se 5 for maior que 3:*/

if (5 > 3) {
  echo "Have a good day!";
}

/*Também podemos usar variáveis ​​na ifinstrução:

Exemplo
Saída "Tenha um bom dia!" se $t for menor que 20:*/
    
$t = 14;
    
if ($t < 20) {
    echo "Have a good day!";
}

/*Operadores lógicos
Para verificar mais de uma condição, podemos utilizar operadores lógicos, como o &&operador:
Exemplo
Verifique se $aé maior que $bE se $aé menor que $c:*/

$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $c < $a ) {
  echo "Both conditions are true";
}

Podemos comparar quantas condições quisermos em uma ifafirmação:

/*Exemplo
Verifique se $aé 2, 3, 4, 5, 6 ou 7:*/
    
$a = 5;
    
if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
    echo "$a is a number between 2 and 7";
}
/*PHP - A instrução if...else
A if...else instrução executa algum código se uma condição for verdadeira e
 outro código se essa condição for falsa.

Sintaxe*/
if (condition) {
  // code to be executed if condition is true;
} else {
  // code to be executed if condition is false;
}

/*ExemploObtenha seu próprio servidor PHP
Saída "Tenha um bom dia!" se o horário atual for inferior a 20 e 
"Tenha uma boa noite!" de outra forma:*/

$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

/*PHP - A instrução if...elseif...else
A if...elseif...else instrução executa códigos diferentes para mais de duas condições.

Sintaxe*/
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  // code to be executed if first condition is false and this condition is true;
} else {
  // code to be executed if all conditions are false;
}

/*Resultado "Tenha um bom dia!" se a hora atual for inferior a 10 e 
"Tenha um bom dia!" se a hora atual for inferior a 20. Caso contrário, 
será exibido "Tenha uma boa noite!":*/

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

/*PHP Shorthand if Statements

Short Hand If
To write shorter code, you can write if statements on one line.

ExampleGet your own PHP Server
One-line if statement: */

$a = 5;

if ($a < 10) $b = "Hello";

echo $b

/*Short Hand If...Else
if...else statements can also be written in one line, but the syntax is a bit different.

Example
One-line if...else statement:*/

$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;

/*PHP Nested if Statement

Nested If
You can have if statements inside if statements, this is called nested if statements.
Example Get your own PHP Server
An if inside an if:*/

$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}