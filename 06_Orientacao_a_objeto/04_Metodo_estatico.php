<?php

// Definição da classe Matematica
class Matematica {
    // Método estático para somar dois números
    public static function somar($x, $y) {
        return $x + $y;
    }

    // O mesmo serve para string
    public static function $nome;

}
// Para utilizar o método estático, basta referenciar a classe
// e chamar o método diretamente, sem criar uma instância da classe
echo Matematica::somar(20, 10); // Saída: 30

// O mesmo serve para string
echo Matematica::$nome = 'matheus'; 


?>