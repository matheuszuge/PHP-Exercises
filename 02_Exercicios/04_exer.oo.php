<?php

class calculadora {
// Atributos
    public $valor = 0;

    public function add($num) {
        return $this->add = $num + $valor; 
    }

    public function sub($num){
        return $this->sub = $num - $valor;
    }

    public function multiply($num);{
        return $this->multiply = $num * $valor; 
    }
    
    public function divide($num){
        if ($num != 0){ 
        $this->divide = $num % $valor;
        } else {
            echo 'erro: divisão por zero.'; 
        }
    }

    public function total($n){
        return $this->total = $n + $valor; 
    }

    public function clear(){
        return $this->Clear = $valor = 0; 
    }
}


/* ------------ CLASSE É REQUISITADA EM OUTRO DOCUMENTO ILUSTRADO ABAIXO---------------*/

require 'calculadora.php'

$calc = new Calculadora();
$calc->add(12); 
$calc->add(2);
$calc->sub(1);
$calc->multiply(3); 
$calc->divide(2);
$calc->add(0.5);

echo "total: ".$calc->total();

$calc->clear(); 

