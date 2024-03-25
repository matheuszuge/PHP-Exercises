<?php

/*Os itens da matriz/arrays podem ser de qualquer tipo de dados.

Os mais comuns são strings e números (int, float), mas os itens de array 
também podem ser objetos, funções ou até mesmo arrays.

Você pode ter diferentes tipos de dados no mesmo array.

Exemplo
Itens de matriz de quatro tipos de dados diferentes:*/

$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);

/*Funções de matriz
A verdadeira força dos arrays PHP são as funções de array integradas, 
como a count() função para contar itens do array:

Exemplo
Quantos itens existem no $carsarray:*//

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

/*Acessar matrizes indexadas
Para acessar um item do array você pode consultar o número do índice.

Exemplo
Exiba o primeiro item da matriz:*/

$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];

/*Alterar valor
Para alterar o valor de um item do array, use o número do índice:

Exemplo
Altere o valor do segundo item:*/

$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);

/*Loop através de uma matriz indexada
Para percorrer e imprimir todos os valores de um array indexado, 
você poderia usar um foreachloop, como este:

Exemplo
Exibir todos os itens da matriz:*/

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}

/*Número do índice
A chave de um array indexado é um número, por padrão o primeiro item é 
0 e o segundo é 1 etc., mas há exceções.

Novos itens recebem o próximo número de índice, ou seja, um número maior 
que o índice existente mais alto .

Então, se você tiver um array como este:*/

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

/*E se você usar a array_push()função para adicionar um novo item, 
o novo item receberá o índice 3:

Exemplo*/

array_push($cars, "Ford");
var_dump($cars);

/*Mas se você tiver um array com números de índice aleatórios, assim:*/

$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";

/*E se você usar a array_push()função para adicionar um novo item, 
qual será o número do índice do novo item?

Exemplo*/

array_push($cars, "Ford");
var_dump($cars);

/*Matrizes associativas são matrizes que usam chaves nomeadas que você atribui a elas.

Exemplo Obtenha seu próprio servidor PHP*/

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);

/*Acessar matrizes associativas
Para acessar um item do array você pode consultar o nome da chave.

Exemplo
Exibir o modelo do carro:*/

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];

/*Alterar valor
Para alterar o valor de um item do array, use o nome da chave:

Exemplo
Altere o year item:*/

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);

/*Loop através de uma matriz associativa
Para percorrer e imprimir todos os valores de um array 
associativo, você poderia usar um foreachloop, como este:

Exemplo
Exiba todos os itens, chaves e valores da matriz:*/

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}

/*Criar matriz
Você pode criar arrays usando a array()função:

Exemplo*/

$cars = array("Volvo", "BMW", "Toyota");

/*Você também pode usar uma sintaxe mais curta usando []colchetes:

Exemplo*/
$cars = ["Volvo", "BMW", "Toyota"]

/*Várias linhas
As quebras de linha não são importantes, portanto uma declaração de array pode abranger várias linhas:

Exemplo*/ 

$cars = [
  "Volvo",
  "BMW",
  "Toyota"
];

/*Vírgula final
Uma vírgula após o último item é permitida:

Exemplo*/ 

$cars = [
  "Volvo",
  "BMW",
  "Toyota",
];

/*Chaves de matriz
Ao criar arrays indexados as chaves são fornecidas automaticamente, 
começando em 0 e aumentando 1 para cada item, portanto o array acima 
também poderia ser criado com chaves:

Exemplo*/

$cars = [
  0 => "Volvo",
  1 => "BMW",
  2 =>"Toyota"
];

/*Como você pode ver, os arrays indexados são iguais aos arrays
 associativos, mas os arrays associativos têm nomes em vez de números:

Exemplo*/

$myCar = [
  "brand" => "Ford",
  "model" => "Mustang",
  "year" => 1964
];

/*Declarar matriz vazia
Você pode declarar um array vazio primeiro e adicionar itens a ele depois:

Exemplo*/

$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

/*O mesmo vale para arrays associativos, você pode declarar o array 
primeiro e depois adicionar itens a ele:

Exemplo*/

$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;

/*Misturando chaves de array
Você pode ter arrays com chaves indexadas e nomeadas:

Exemplo*/ 

$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

/*Acessar item da matriz
Para acessar um item de array, você pode consultar o 
número do índice para arrays indexados e o nome da 
chave para arrays associativos.

ExemploObtenha seu próprio servidor PHP
Acesse um item consultando seu número de índice:*/

$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];

/*Nota: O primeiro item possui índice 0.

Para acessar itens de um array associativo , use o nome da chave:

Exemplo
Acesse um item consultando seu nome de chave:*/

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];

/*Citações Duplas ou Simples
Você pode usar aspas duplas e simples ao acessar um array:

Exemplo*/ 

echo $cars["model"];
echo $cars['model'];

/*Executar um item de função
Os itens da matriz podem ser de qualquer tipo de dados, incluindo função.

Para executar tal função, use o número do índice seguido de parênteses ():

Exemplo
Execute um item de função:*/

function myFunction() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, myFunction);

$myArr[2]();

/*Use o nome da chave quando a função for um item em uma matriz associativa:

Exemplo
Execute a função referindo-se ao nome da chave:*/
    
function myFunction() {
    echo "I come from a function!";
}
    
$myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction);
    
$myArr["message"]();

/*Loop através de uma matriz associativa
Para percorrer e imprimir todos os valores de um array associativo, 
você pode usar um foreachloop, como este:

Exemplo
Exiba todos os itens, chaves e valores da matriz:*/

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}

/*Loop através de uma matriz indexada
Para percorrer e imprimir todos os valores de um array indexado, 
você pode usar um foreachloop, como este:

Exemplo
Exibir todos os itens da matriz:*/

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}

/*Atualizar item da matriz
Para atualizar um item de matriz existente, você pode consultar o número do índice para matrizes indexadas e o nome da chave para matrizes associativas.

ExemploObtenha seu próprio servidor PHP
Altere o segundo item da matriz de “BMW” para “Ford”:*/

$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";

/*Nota: O primeiro item possui índice 0.

Para atualizar itens de um array associativo , use o nome da chave:

Exemplo
Atualize o ano para 2024:*/

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;

/*Atualizar itens do array em um loop Foreach
Existem diferentes técnicas a serem usadas ao alterar valores de itens em um foreachloop.

Uma maneira é inserir o &caractere na atribuição para atribuir o valor do item por referência e, assim, garantir que quaisquer alterações feitas no item do array dentro do loop serão feitas no array original:

Exemplo
Altere TODOS os valores dos itens para "Ford":*/

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
var_dump($cars);

/*Adicionar item de matriz
Para adicionar itens a uma matriz existente, você pode usar a []sintaxe de colchetes.

ExemploObtenha seu próprio servidor PHP
Adicione mais um item ao fruitsarray:*/

$fruits = array("Apple", "Banana", "Cherry");
$fruits = ["Orange"];

/*Matrizes Associativas
Para adicionar itens a uma matriz associativa ou matriz de 
chave/valor, use colchetes [] para a chave e atribua o valor com o =operador.

Exemplo
Adicione um item ao cararray:*/

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";

/*Adicionar vários itens de array
Para adicionar vários itens a um array existente, use a array_push()função.

Exemplo
Adicione três itens ao fruits array:*/

$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");

/*Adicionar vários itens a matrizes associativas
Para adicionar vários itens a uma matriz existente, você pode usar o +=operador.

Exemplo
Adicione dois itens ao carsarray:*/

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];

/*Remover item da matriz
Para remover um item existente de um array, você pode usar a 
array_splice()função.

Com a array_splice()função você especifica o índice (por onde começar)
 e quantos itens deseja excluir.*/

/*ExemploObtenha seu próprio servidor PHP
Remova o segundo item:*/

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);

/*Após a exclusão, o array é reindexado automaticamente, começando no índice 0.

Usando a função unset
Você também pode usar a unset()função para excluir itens existentes da matriz.

Nota: A unset()função não reorganiza os índices, o que significa que após a exclusão a matriz não conterá mais os índices ausentes.

Exemplo
Remova o segundo item:*/

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);