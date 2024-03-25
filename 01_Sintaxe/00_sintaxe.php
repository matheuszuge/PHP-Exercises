
<?php
//Um script PHP é executado no servidor e o resultado HTML 
//simples é enviado de volta ao navegador.

/*
Sintaxe PHP Básica
Um script PHP pode ser colocado em qualquer lugar do documento.

Um script PHP começa <?phpe termina com ?>:
*/

// PHP code goes here

// Exemplo de hello world;

echo "Hello World!";

// Comentarios em php; 

// This is a single-line comment

# This is also a single-line comment

/* This is a
multi-line comment */

/* A extensão de arquivo padrão para arquivos PHP é " .php".

Um arquivo PHP normalmente contém tags HTML e algum código de script PHP.

Abaixo, temos um exemplo de arquivo PHP simples, com um script PHP que usa uma função PHP 
integrada " echo" para gerar o texto "Hello World!" em uma página da web:

ExemploObtenha seu próprio servidor PHP
Um arquivo simples .phpcom código HTML e código PHP:
*/

?>


<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";


</body>
</html>

//Nota: as instruções PHP terminam com ponto e vírgula ( ;).


//Sensibilidade a maiúsculas e minúsculas em PHP
/*Em PHP, palavras-chave (por exemplo if, else, while, , echo, etc.), classes,
 funções e funções definidas pelo usuário não diferenciam maiúsculas de minúsculas.

No exemplo abaixo, todas as três instruções echo abaixo são iguais e legais:

ECHOé o mesmo que echo:
*/
?>

<!DOCTYPE html>
<html>
<body>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

</body>
</html>

<?php

/* ----------------------------- tipos de dados -------------------------*/

/*Tipos de dados PHP
Variáveis ​​podem armazenar dados de diferentes tipos, e diferentes tipos de dados
 podem fazer coisas diferentes.

PHP suporta os seguintes tipos de dados:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/

/*String PHP
Uma string é uma sequência de caracteres, como "Olá, mundo!".

Uma string pode ser qualquer texto entre aspas. Você pode usar aspas simples ou duplas:*/

$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);


/* PHP inteiro
Um tipo de dados inteiro é um número não decimal entre -2.147.483.648 e 2.147.483.647.

Regras para números inteiros:

Um número inteiro deve ter pelo menos um dígito
Um número inteiro não deve ter ponto decimal
Um número inteiro pode ser positivo ou negativo
Os números inteiros podem ser especificados em: notação decimal (base 10), 
hexadecimal (base 16), octal (base 8) ou binária (base 2).No exemplo a seguir
$xé um número inteiro. A função PHP var_dump() retorna o tipo 
e o valor dos dados:*/

$x = 5985;
var_dump($x);

/*Float PHP
Um float (número de ponto flutuante) é um número com uma vírgula decimal ou um 
número na forma exponencial.

No exemplo a seguir $xestá um float. A função PHP var_dump() retorna o tipo e 
o valor dos dados:*/

$x = 10.365;
var_dump($x);

/*PHP Booleano
Um booleano representa dois estados possíveis: TRUE ou FALSE.*/

$x = true;
var_dump($x);

//Matriz PHP (array)
/*Uma matriz armazena vários valores em uma única variável.

No exemplo a seguir $carsestá uma matriz. A função PHP var_dump() retorna o tipo
e o valor dos dados:*/

$cars = array("Volvo","BMW","Toyota");
//Ou
$cars = array(
    "Volvo",
    "BMW",
    "Toyota"
);

var_dump($cars);

//Objeto PHP
/* Classes e objetos são os dois aspectos principais da programação orientada a objetos.

Uma classe é um modelo para objetos e um objeto é uma instância de uma classe.

Quando os objetos individuais são criados, eles herdam todas as propriedades e 
comportamentos da classe, mas cada objeto terá valores diferentes para as propriedades.

Vamos supor que temos uma classe chamada Carro que pode ter propriedades como
 modelo, cor, etc. 
Podemos definir variáveis ​​como $modelo, $color e assim por diante, para armazenar
 os valores dessas propriedades.

Quando os objetos individuais (Volvo, BMW, Toyota, etc.) são criados, eles herdam
todas as propriedades e comportamentos da classe, mas cada objeto terá valores 
diferentes para as propriedades.

Se você criar uma __construct() função, o PHP chamará essa função automaticamente 
quando você criar um objeto a partir de uma classe.*/ 
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);
  
/* Valor NULO do PHP
Nulo é um tipo de dados especial que pode ter apenas um valor: NULL.

Uma variável do tipo de dados NULL é uma variável que não possui nenhum valor atribuído a ela.

Dica: Se uma variável for criada sem um valor, será automaticamente atribuído a ela um valor NULL.

As variáveis ​​também podem ser esvaziadas definindo o valor como NULL:*/

$x = "Hello world!";
$x = null;
var_dump($x);

//Alterar tipo de dados
/* Se você atribuir um valor inteiro a uma variável, o tipo será automaticamente um número inteiro.

Se você atribuir uma string à mesma variável, o tipo mudará para uma string: */

$x = 5;
var_dump($x);

$x = "Hello";
var_dump($x);

/*Se quiser alterar o tipo de dados de uma variável existente, mas não alterando o valor, você pode usar a conversão.

A conversão permite alterar o tipo de dados nas variáveis:*/

$x = 5;
$x = (string) $x;
var_dump($x);

?>