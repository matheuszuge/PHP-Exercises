<?php
function conta($a, $b, $operacao) {
    switch ($operacao) { //UTILIZAR O SWITCH EM VEZ DO IF ELSE
        case 'somar':
            return $a + $b;
        case 'subtrair':
            return $a - $b;
        case 'multiplicar':
            return $a * $b;
        case 'dividir':
            // Certifique-se de evitar a divisão por zero
            return ($b != 0) ? $a / $b : "Erro: Divisão por zero!";
        default:
            return "Operação inválida";
    }
}
$a = 5;
$b = 10;
$operacao = 'somar';

$resultado = conta($a, $b, $operacao);

echo "O resultado da operação $operacao entre $a e $b é: $resultado";

// Exercício: Verificação de Palíndromo

//Crie uma função em PHP que verifica se uma palavra é um palíndromo.
//Um palíndromo é uma palavra, frase, número ou qualquer 
//sequência de caracteres que se lê da mesma forma para frente e para trás,
//desconsiderando espaços, pontuações e diferenciação entre maiúsculas e minúsculas.

//Instruções:

//Crie uma função chamada verificarPalindromo que aceite uma string como parâmetro.
//Na função, remova espaços, pontuações e converta todos os caracteres para minúsculas
//para evitar diferenciação entre maiúsculas e minúsculas.
//Compare a string original com a sua inversa para verificar se é um palíndromo.
//Retorne true se for um palíndromo e false caso contrário.


function verificarPalindromo($palavra) {
    // Implemente sua lógica aqui
    // Remover espaços e pontuações, e converter para minúsculas
    $limpaPalavra = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $palavra));

    // Comparar a palavra original com sua inversa
    return $limpaPalavra === strrev($limpaPalavra);

}

$palavra1 = "arara";
$palavra2 = "Amo a Roma";
$palavra3 = "php";

echo verificarPalindromo($palavra1); // Deveria retornar true
echo verificarPalindromo($palavra2); // Deveria retornar true
echo verificarPalindromo($palavra3); // Deveria retornar false

/*Pergunta 1: Variáveis e Saída de Dados
a) Declare uma variável chamada $nome com o valor "João".
*/
$nome = "joão";

/*b) Use a função echo para imprimir a seguinte mensagem na tela: "Olá, João!"
*/

$nome = "joão";
echo "ola ,$nome";

/*Pergunta 2: Estruturas de Controle
a) Crie uma estrutura condicional (if/else) que verifica se um número é positivo, negativo ou zero.
*/

if num >= 0 {
    return echo ($num) "é positivo";
} else {
    if num === 0;
        return echo ($num) "é igual a zero";
}
default: echo ($num) "é negativo";


//b) Use a variável $numero = 7 para testar sua estrutura condicional.

function operacao (n1) {
    if num >= 0 {
        return echo ($num) "é positivo";   
    } else {
        if num === 0;
            return echo ($num) "é igual a zero";
        }
    default: echo ($num) "é negativo";
    }
}

echo operacao(7);


/*Pergunta 3: Loops
a) Crie um loop for que imprima os números de 1 a 5.
b) Em seguida, crie um loop while que faça o mesmo.
Pergunta 4: Funções
a) Crie uma função chamada soma que aceita dois parâmetros e retorna a soma deles.
*/

function soma(n1, n2) {
    retunr n1 + n2;
}
echo soma(); 

//b) Use a função para somar os números 10 e 5.

function soma($n1, $n2) {
    retunr n1 + n2;
}
echo soma(10, 5); 

/*Pergunta 5: Manipulação de Strings
//a) Declare uma string chamada $fruta com o valor "maçã".
*/

$fruta = "maça";

/*b) Use a função strlen para imprimir o comprimento da string.
//Pergunta Bônus: Arrays
a) Crie um array chamado $cores com três cores diferentes.*/

$cores = [
    azul,
    amarelo, 
    magenta
];

/*b) Use um loop foreach para imprimir cada cor do array.
//Pergunta 1: Manipulação de Strings
a) Dada a string $fruta = "maça", use a função strtoupper para converter a string para maiúsculas.
*/
$fruta  = "maça";
$limpaPalavra = strtoupper($fruta);

//b) Imprima a string resultante após a conversão.

echo $frutaMaiuscula; // CORREÇÃO

/*Pergunta 2: Estruturas de Controle
a) Crie uma estrutura condicional (if/else) que verifica se a variável $idade 
/*é maior ou igual a 18. 
Se for verdadeiro, imprima "Maior de idade", 
caso contrário, imprima "Menor de idade".
*/
if ($idade >= 18;) {
    echo "você é de maior";
} else {
    echo "você é de menor";
}    
//b) Use a variável $idade = 22 para testar sua estrutura condicional.

$idade = 22;

if ($idade >= 18;) {
    echo "você é de maior";
} else {
    echo "você é de menor";
}    
/*Pergunta 3: Loops e Arrays
a) Crie um array chamado $numeros com os valores 2, 4, 6, 8, 10.
*/
$numeros = array(2 , 4, 6, 8, 10);

/*b) Utilize um loop foreach para imprimir cada número do array.
*/
$numeros = array(2 , 4, 6, 8, 10);
foreach ($numeros as $num) {
    echo $num."br";
}
/*Pergunta 4: Funções

a) Modifique a função soma que você criou anteriormente 
para aceitar um terceiro parâmetro e retornar a soma dos três números.
*/

function soma($n1, $n2, $n3) {
    retunr $n1 + $n2 + $n3;
}

//b) Use a função para somar os números 5, 8 e 3.

echo soma(5, 8 e 3); 

/*Pergunta Bônus: Estruturas de Controle e Arrays

a) Crie um array chamado $frutas com as seguintes frutas: 

"banana", "uva", "morango", "abacaxi".
*/

$frutas = array("uva", "morango", "abacaxi");

/*b) Utilize uma estrutura de controle para imprimir "Gosto de [fruta]"
*/
echo "Gosto de $fruta <br>";

/*para cada fruta no array.
Instruções para Responder:
Escreva o código PHP para cada pergunta.
Se precisar explicar o raciocínio ou a lógica por trás do código, sinta-se à vontade para fazer isso.
Espero que essas perguntas ajudem a consolidar seus conhecimentos em PHP!
*/

function subsequente() {
    for($q=0; $q<10;$q++); {
        echo $q."<br/>";     
    }

    echo "<br/>";
}

for($q=0; $q<10;$q++); {
    subsequente();   
}


//arow function (funções anonimas simplificadas em uma expressão)
$dizimo = fn($valor) => $valor * 0.1;


//função recursiva = função que executa ela mesma

function dividir($numero) {
    $metade = $numero % 2;
    echo $metade.('<br/>');

    if (round($metade) > 0) {
        dividir($metade)
    }
}   

// funções nativas de matematica

// returna numero positivo
$numer = -8.4;

echo abs($numero)

//função pi 

echo pi()

// aredondar numero para baixo

echo floor(2.4)

//areedondar para cima

echo ceil($numero);

//aredondar dependendo do numero: 
echo round($numero)


// função que passa numero aleatorio

$aleatorio = rand(3, 9); //recebe os parametros e gera um aleatorio entre eles. 
echo $aleatorio;


// Saber maior/menor do array;

$lista = [
    '1',
    '2',
    '3',
    '4',
];
$maior = max($lista);
echo $maior; //função vai passar o maior numero dentro do array
















?>



