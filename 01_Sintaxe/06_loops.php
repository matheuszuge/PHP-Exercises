<?php
/*PHP switch Statement

The switch statement is used to perform different actions based on different conditions.

The PHP switch Statement
Use the switch statement to select one of many blocks of code to be executed.

Syntax*/

switch (expression) {
  case label1:
    //code block
    break;
  case label2:
    //code block;
    break;
  case label3:
    //code block
    break;
  default:
    //code block
}

/*This is how it works:

É assim que funciona:

A expressão é avaliada uma vez
O valor da expressão é comparado com os valores de cada caso
Se houver uma correspondência, o bloco de código associado será executado
A breakpalavra-chave sai do bloco switch
O defaultbloco de código é executado se não houver correspondência*/

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

/*PHP Loops

Nos capítulos seguintes você aprenderá como repetir código usando loops em PHP.

Loops PHP
Muitas vezes, quando você escreve código, deseja que o mesmo bloco 
de código seja executado repetidamente um determinado número de vezes. 
Portanto, em vez de adicionar várias linhas de código quase iguais em um script,
 podemos usar loops.

Loops são usados ​​para executar o mesmo bloco de código repetidamente, 
desde que uma determinada condição seja verdadeira.

Em PHP, temos os seguintes tipos de loop:

while- percorre um bloco de código enquanto a condição especificada for verdadeira
do...while- percorre um bloco de código uma vez e depois repete o loop 
enquanto a condição especificada for verdadeira
for- percorre um bloco de código um determinado número de vezes
foreach- percorre um bloco de código para cada elemento de um array
Os capítulos seguintes explicarão e darão exemplos de cada tipo de loop.*/

/*PHP enquanto Loop

O whileloop - percorre um bloco de código enquanto a condição especificada for verdadeira.

O loop while do PHP
O whileloop executa um bloco de código enquanto a condição especificada for verdadeira.*/

/*ExemploObtenha seu próprio servidor PHP
Imprima $icontanto que $iseja menor que 6:*/

$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}

/*O whileloop não é executado um número específico de vezes, mas verifica 
após cada iteração se a condição ainda é verdadeira.

A condição não precisa ser um contador, pode ser o status de uma operação
 ou qualquer condição avaliada como verdadeira ou falsa.

A declaração de ruptura
Com a breakafirmação podemos parar o loop mesmo que a condição ainda seja verdadeira:*/

/*Exemplo
Pare o loop quando $ifor 3:*/

$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}

/*A declaração de continuação
Com a continuedeclaração podemos parar a iteração atual e continuar com a próxima:

Exemplo
Pare e pule para a próxima iteração se $ifor 3:*/

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}

/*Sintaxe Alternativa
A whilesintaxe do loop também pode ser escrita com uma endwhileinstrução como esta

Exemplo
Imprima $icontanto que $iseja menor que 6:*/

$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;

/*Etapa 10
Se você quiser que a whilecontagem de loops seja 100, mas apenas a cada 10, você pode aumentar o contador em 10 em vez de 1 em cada iteração:

Exemplo
Conte até 100 por dezenas:*/

$i = 0;
while ($i < 100) {
  $i+=10;
  echo $i "<br>";
}

/*PHP do while Loop

O do...whileloop - percorre um bloco de código uma vez e, em seguida, 
repete o loop enquanto a condição especificada for verdadeira.

O PHP faz...while Loop
O do...whileloop sempre executará o bloco de código pelo menos uma vez, 
verificará a condição e repetirá o loop enquanto a condição especificada for verdadeira.*/

/*ExemploObtenha seu próprio servidor PHP
Imprima $i contanto que $iseja menor que 6:*/

$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);

/*Nota: Em um do...whileloop, a condição é testada APÓS a execução das 
instruções dentro do loop. Isso significa que o do...whileloop executará
 suas instruções pelo menos uma vez, mesmo que a condição seja falsa. Veja o exemplo abaixo.

Vamos ver o que acontece se definirmos a $ivariável como 8 em vez de 1, 
antes de executar o mesmo do...whileloop novamente:

Exemplo
Defina $i = 8e imprima $i enquanto $ifor menor que 6:*/

$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);

/*A declaração de ruptura
Com a breakafirmação podemos parar o loop mesmo que a condição ainda seja verdadeira:

Exemplo
Pare o loop quando $i for 3:*/

$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);

/*A declaração de continuação
Com a continuedeclaração podemos parar a iteração atual e continuar com a próxima:

Exemplo
Pare e pule para a próxima iteração se $ifor 3:*/

$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);

/*O forloop - percorre um bloco de código um determinado número de vezes.

O PHP para Loop
O forloop é usado quando você sabe quantas vezes o script deve ser executado.

Sintaxe*/

for (expression1, expression2, expression3) {
    // code block
  }

/*É assim que funciona:

expressão1 é avaliada uma vez
expressão2 é avaliada antes de cada iteração
expressão3 é avaliada após cada iteração
ExemploObtenha seu próprio servidor PHP
Imprima os números de 0 a 10:*/

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

/*Exemplo explicado
A primeira expressão, $x = 0;, é avaliada uma vez e define um contador como 0.
A segunda expressão, $x <= 10;, é avaliada antes de cada iteração, e o bloco 
de código só é executado se esta expressão for avaliada como verdadeira. 
Neste exemplo, a expressão é verdadeira desde que $xseja menor ou igual a 10.
A terceira expressão, $x++;, é avaliada após cada iteração e, neste exemplo, 
a expressão aumenta o valor de $xem um em cada iteração.
A declaração de ruptura
Com a breakafirmação podemos parar o loop mesmo que a condição ainda seja verdadeira:

Exemplo
Pare o loop quando $ifor 3:*/

for ($x = 0; $x <= 10; $x++) {
    if ($i == 3) break;
    echo "The number is: $x <br>";
  }

/*A declaração de continuação
Com a continuedeclaração podemos parar a iteração atual e continuar com a próxima:

  Exemplo
Pare e pule para a próxima iteração se $i for 3:*/

for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) continue;
  echo "The number is: $x <br>";
}

/*Etapa 10
Este exemplo conta até 100 por dezenas:

Exemplo*/
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}

/*Loop foreach do PHP
O foreachloop - percorre um bloco de código para cada elemento em uma
 matriz ou cada propriedade em um objeto.

O loop foreach em arrays
O uso mais comum do foreachloop é percorrer os itens de um array.*/

/*ExemploObtenha seu próprio servidor PHP
Faça um loop pelos itens de uma matriz indexada:*/

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

/*Para cada iteração do loop, o valor do elemento atual da matriz 
é atribuído ao variabe $x. A iteração continua até atingir o último elemento do array.

Chaves e Valores
O array acima é um array indexado , onde o primeiro item possui a chave
 0, o segundo possui a chave 1 e assim por diante.

As matrizes associativas são diferentes, as matrizes associativas usam 
chaves nomeadas que você atribui a elas e, ao fazer um loop pelas matrizes 
associativas, você pode querer manter a chave e também o valor.

Isso pode ser feito especificando a chave e o valor na foreachdefinição, assim:

Exemplo
Imprima a chave e o valor do $membersarray:*/

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}

/*O loop foreach em objetos
O foreachloop também pode ser usado para percorrer as propriedades de um objeto:

Exemplo
Imprima os nomes das propriedades e valores do $myCarobjeto:*/

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
  echo "$x: $y <br>";
}

/*Você aprenderá mais sobre objetos no capítulo Objetos e classes PHP .

A declaração de ruptura
Com a breakinstrução podemos parar o loop mesmo que ele não tenha chegado ao fim:

Exemplo
Pare o loop se $xestiver "azul":*/

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}

/*A declaração de continuação
Com a continuedeclaração podemos parar a iteração atual e continuar com a próxima:

Exemplo
Pare e pule para a próxima iteração se $xfor "azul":

$colors = array("red", "green", "blue", "yellow");*/

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}

/*Foreach Byref
Ao percorrer os itens do array, quaisquer alterações feitas no item do array NÃO afetarão, por padrão, o array original:

Exemplo
Por padrão, alterar um item do array não afetará o array original:

$colors = array("red", "green", "blue", "yellow");*/

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);

/*MAS, ao usar o & caractere na foreachdeclaração, o item do array é 
atribuído por referência , o que resulta em quaisquer alterações feitas no
item do array também serão feitas no array original:

Exemplo
Ao atribuir os itens do array por referência , as alterações afetarão o array original:*/
    
$colors = array("red", "green", "blue", "yellow");
    
foreach ($colors as &$x) {
    if ($x == "blue") $x = "pink";
}
    
var_dump($colors);

/*Sintaxe Alternativa
A foreachsintaxe do loop também pode ser escrita com uma endforeachinstrução como esta

Exemplo
Faça um loop pelos itens de uma matriz indexada:*/

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :   
  echo "$x <br>";
endforeach;

/*PHP Break

Interromper o loop Do While
A breakinstrução pode ser usada para sair de um do...whileloop.

Exemplo
Pare o loop quando $ifor 3::*/

$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6); 

Break in For loop
The break statement can be used to jump out of a for loop
ExampleGet your own PHP Server
Jump out of the loop when $x is 4:*/

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

/*Interromper para cada loop
A breakinstrução pode ser usada para sair de um foreachloop.

Exemplo
Pare o loop se $xestiver "azul":

$colors = array("red", "green", "blue", "yellow");*/

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}

/*PHP Continuar

A continueinstrução pode ser usada para sair da iteração atual de um loop e continuar com a próxima.

Continuar em For Loops
A continueinstrução interrompe a iteração atual no forloop e continua com a próxima.

ExemploObtenha seu próprio servidor PHP
Vá para a próxima iteração se $x= 4:*/

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }

/*Continuar em loop while
A continueinstrução interrompe a iteração atual no whileloop e continua com a próxima.

Continuar exemplo
Vá para a próxima iteração se $x= 4:*/

$x = 0;

while($x < 10) {
  if ($x == 4) {
    co  ntinue;
  }
  echo "The number is: $x <br>";
  $x++;
}