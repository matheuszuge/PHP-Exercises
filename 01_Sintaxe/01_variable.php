<?php

//Declarando variaveis
$x = 5;
$y = "John"

/* Uma variável pode ter um nome curto (como $xe $y) ou um nome mais descritivo ( ,, $age) .$carname$total_volume

Regras para variáveis ​​PHP:

Uma variável começa com o $sinal, seguido pelo nome da variável
O nome de uma variável deve começar com uma letra ou sublinhado (_)
Um nome de variável não pode começar com um número
Um nome de variável só pode conter caracteres alfanuméricos e sublinhados (Az, 0-9 e _)
Os nomes das variáveis ​​diferenciam maiúsculas de minúsculas ( $agee $AGEsão duas variáveis ​​diferentes)


Lembre-se de que os nomes das variáveis ​​PHP diferenciam maiúsculas de minúsculas!
*/


//Variáveis ​​de saída
//A instrução PHP echoé frequentemente usada para enviar dados para a tela.

//O exemplo a seguir mostrará como gerar texto e uma variável:

$txt = "Portugueses em um bar";
echo "32 $txt!";

//O exemplo a seguir produzirá a soma de duas variáveis:

$x = 5;
$y = 4;
echo $x + $y;

//Tipos de variáveis
//O PHP não possui comando para declarar uma variável e o tipo de dados depende do valor da variável.

$x = 5;      // $x é um inteiro 
$y = "John"; // $y é uma string
echo $x;
echo $y;

/*PHP suporta os seguintes tipos de dados:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/


/* Obtenha o tipo
Para obter o tipo de dados de uma variável, use a var_dump()função.
*/

$x = 5;
var_dump($x);

//Veja o que var_dump()retorna para outros tipos de dados:

var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);


/*Atribuir String a uma Variável
A atribuição de uma string a uma variável é feita com o nome da variável seguido de um sinal de igual e da string:
*/

$x = "John";
echo $x;

/* Atribuir vários valores
Você pode atribuir o mesmo valor a múltiplas variáveis ​​em uma linha:
*/

$x = $y = $z = "Fruta";

// ---------------------------------   Escopo das Variáveis ​​PHP ---------------------------------  //

/* No PHP, as variáveis ​​podem ser declaradas em qualquer lugar do script.

O escopo de uma variável é a parte do script onde a variável pode ser referenciada/usada.

PHP tem três escopos de variáveis ​​diferentes:

local
global
estático
*/ 

// Escopo Global e Local


//Uma variável declarada fora de uma função possui ESCOPO GLOBAL e só pode ser acessada fora de uma função:

//Exemplo escopo global

$x = 5; // global scope

function myTest() {
  // usando x dentro dessa function irá gerar um erro. 
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";


//Uma variável declarada dentro de uma função possui um ESCOPO LOCAL e só pode ser acessada dentro dessa função:

//Exemplo escopo local

function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest();
  
  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $x</p>"; 

  //Você pode ter variáveis ​​locais com o mesmo nome em funções diferentes, pois as variáveis ​​locais só são reconhecidas pela função na qual são declaradas. 

//------PHP A palavra-chave global -------//

/*
A globalpalavra-chave é usada para acessar uma variável global de dentro de uma função.

Para fazer isso, use a globalpalavra-chave antes das variáveis ​​(dentro da função):*/

$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15


/*O PHP também armazena todas as variáveis ​​globais em um array chamado . O contém o nome da variável. Este array também é acessível a partir de funções e pode ser usado para atualizar variáveis ​​globais diretamente.$GLOBALS[index]index

O exemplo acima pode ser reescrito assim:*/


$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15

//PHP A palavra-chave estática


/* Normalmente, quando uma função é concluída/executada, todas as suas variáveis ​​são excluídas. No entanto, às vezes queremos que uma variável local NÃO seja excluída. Precisamos dele para outro trabalho.

Para fazer isso, use a staticpalavra-chave ao declarar a variável pela primeira vez:*/

function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest();
  myTest();
  myTest();
