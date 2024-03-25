<?php

/*Funções PHP

O verdadeiro poder do PHP vem de suas funções.

PHP possui mais de 1000 funções integradas e, além disso, você pode criar 
suas próprias funções personalizadas.

Funções integradas do PHP
O PHP possui mais de 1.000 funções integradas que podem ser chamadas diretamente, 
de dentro de um script, para executar uma tarefa específica.
Por favor, verifique nossa referência de PHP para uma visão geral
 completa das funções integradas do PHP .

Funções definidas pelo usuário PHP
Além das funções integradas do PHP, é possível criar suas próprias funções.

Uma função é um bloco de instruções que pode ser usado repetidamente em um programa.
Uma função não será executada automaticamente quando uma página for carregada.
Uma função será executada por uma chamada à função.
Crie uma função
Uma declaração de função definida pelo usuário começa com a palavra-chave 
function, seguida pelo nome da função:

Exemplo*/

function myMessage() {
    echo "Hello world!";
  }

/*Nota: O nome de uma função deve começar com uma letra ou sublinhado. 
Os nomes das funções NÃO diferenciam maiúsculas de minúsculas.

Dica: Dê à função um nome que reflita o que ela faz!

Chame uma função
Para chamar a função, basta escrever seu nome seguido de parênteses ():*/

function myMessage() {
  echo "Hello world!";
}

myMessage();

/*Em nosso exemplo, criamos uma função chamada myMessage().

A chave de abertura {indica o início do código da função e a chave de 
    fechamento }indica o final da função.

A função gera "Olá, mundo!".

Argumentos de função PHP
As informações podem ser passadas para funções por meio de argumentos. Um argumento é como uma variável.

Os argumentos são especificados após o nome da função, entre parênteses. Você pode adicionar quantos argumentos quiser, basta separá-los com vírgula.

O exemplo a seguir possui uma função com um argumento ($fname). Quando a familyName()função é chamada, também passamos um nome, por exemplo ("Jani"), e o nome é usado dentro da função, que gera vários nomes diferentes, mas um sobrenome igual:

Exemplo*/

function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");
  

/*O exemplo a seguir tem uma função com dois argumentos ($fname, $year):
Exemplo*/

function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

/*Valor do argumento padrão do PHP
O exemplo a seguir mostra como usar um parâmetro padrão. Se chamarmos a função setHeight()sem argumentos, ela receberá o valor padrão como argumento:

Exemplo*/
function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

/*Funções PHP – Retornando valores
Para permitir que uma função retorne um valor, use a returninstrução:

Exemplo*/

function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

/*Passando argumentos por referência
No PHP, os argumentos geralmente são passados ​​por valor, o que significa que uma cópia do valor é usada na função e a variável que foi passada para a função não pode ser alterada.

Quando um argumento de função é passado por referência, as alterações no argumento também alteram a variável que foi passada. Para transformar um argumento de função em uma referência, o & operador é usado:

Exemplo
Use um argumento de passagem por referência para atualizar uma variável:*/

function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;

/*Número variável de argumentos
Ao usar o ...operador na frente do parâmetro da função, a função aceita um número desconhecido de argumentos. Isso também é chamado de função variadica.

O argumento da função variável torna-se um array.

Exemplo
Uma função que não sabe quantos argumentos receberá:*/

function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;

/*Você só pode ter um argumento com comprimento variável e deve ser o último argumento.

Exemplo
O argumento variadico deve ser o último argumento:*/

function myFamily($lastname, ...$firstname) {
  txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;

/*PHP é uma linguagem de digitação livre
Nos exemplos acima, observe que não precisamos informar ao PHP qual é o tipo de dados da variável.

O PHP associa automaticamente um tipo de dados à variável, dependendo do seu valor. Como os tipos de dados não são definidos em sentido estrito, você pode fazer coisas como adicionar uma string a um número inteiro sem causar erro.

No PHP 7, foram adicionadas declarações de tipo. Isso nos dá a opção de especificar o tipo de dados esperado ao declarar uma função e, ao adicionar a strict declaração, gerará um "Erro fatal" se o tipo de dados não corresponder.

No exemplo a seguir, tentamos enviar um número e uma string para a função sem usar strict:

Exemplo*/ 

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10