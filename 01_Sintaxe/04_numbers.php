<?php
/* PHP Numbers

Neste capítulo, examinaremos detalhadamente números 
inteiros, flutuantes e strings numéricas.


Números PHP
Existem três tipos numéricos principais em PHP:

Integer
Float
Number Strings

Além disso, o PHP possui mais dois tipos de dados usados ​​para números:
Infinity
NaN

Variáveis ​​de tipos numéricos são criadas quando você atribui um valor a elas: */

$a = 5;
$b = 5.34;
$c = "25";

//Para verificar o tipo de qualquer objeto em PHP, use a var_dump()função:

var_dump($a);
var_dump($b);
var_dump($c);

/*
Inteiros PHP
2, 256, -256, 10358, -179567 são todos números inteiros.

Um número inteiro é um número sem qualquer parte decimal.

Um tipo de dados inteiro é um número não decimal entre -2147483648 e 2147483647 em sistemas de 32 bits e entre -9223372036854775808 e 9223372036854775807 em sistemas de 64 bits. Um valor maior (ou menor) que este, será armazenado como float, pois ultrapassa o limite de um número inteiro.

Nota: Outra coisa importante a saber é que mesmo que 4 * 2,5 seja 10, o resultado é armazenado como float, pois um dos operandos é float (2,5).

Aqui estão algumas regras para números inteiros:

Um número inteiro deve ter pelo menos um dígito
Um número inteiro NÃO deve ter ponto decimal
Um número inteiro pode ser positivo ou negativo
Os inteiros podem ser especificados em três formatos: decimal (base 10), hexadecimal (base 16 - prefixado com 0x), octal (base 8 - prefixado com 0) ou binário (base 2 - prefixado com 0b)
PHP possui as seguintes constantes predefinidas para números inteiros:

PHP_INT_MAX- O maior número inteiro suportado
PHP_INT_MIN- O menor número inteiro suportado
PHP_INT_SIZE- O tamanho de um número inteiro em bytes
O PHP possui as seguintes funções para verificar se o tipo de uma variável é inteiro:
*/    

is_int()
is_integer()- apelido de is_int()
is_long()- apelido de is_int()

/*
Exemplo
Verifique se o tipo de uma variável é inteiro:
*/

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

/*
PHP flutua
Um float é um número com vírgula decimal ou um número na forma exponencial.

2,0, 256,4, 10,358, 7,64E+5, 5,56E-5 são todos flutuantes.

O tipo de dados float normalmente pode armazenar um valor de até 1,7976931348623E+308 (dependente da plataforma) e ter uma precisão máxima de 14 dígitos.

O PHP possui as seguintes constantes predefinidas para floats (do PHP 7.2):

PHP_FLOAT_MAX- O maior número de ponto flutuante representável
PHP_FLOAT_MIN- O menor número de ponto flutuante positivo representável
PHP_FLOAT_DIG- O número de dígitos decimais que podem ser arredondados 
para um ponto flutuante e vice-versa sem perda de precisão
PHP_FLOAT_EPSILON- O menor número positivo representável x, de modo que x + 1,0!= 1,0
O PHP possui as seguintes funções para verificar se o tipo de uma variável é float:
*/

//is_float()
//is_double()- apelido de is_float()

$x = 10.365;
var_dump(is_float($x));

/*
PHP Infinito
Um valor numérico maior que PHP_FLOAT_MAXé considerado infinito.

O PHP possui as seguintes funções para verificar se um valor numérico é finito ou infinito:
*/

is_finite()
is_infinite()
//No entanto, a função PHP var_dump()retorna o tipo e o valor dos dados:

/*Example
Check if a numeric value is finite or infinite:*/

$x = 1.9e411;
var_dump($x);

/*PHP NaN
NaN stands for Not a Number.

NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

is_nan()
However, the PHP var_dump() function returns the data type and value:


Example
Invalid calculation will return a NaN value:*/

$x = acos(8);
var_dump($x);


/*PHP Numerical Strings
The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.

Check if the variable is numeric:*/

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

/*PHP Casting Strings and Floats to Integers
Sometimes you need to cast a numerical value into another data type.

The (int), (integer), and intval() functions are often used to convert a value to an integer..*/

/*Example
Cast float and string to integer:*/

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

