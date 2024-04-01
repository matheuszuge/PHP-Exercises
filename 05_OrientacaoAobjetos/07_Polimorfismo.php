<?php

class Quadrado {

}

class Circulo {
    
}

$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);

$objetos = [
    $quadrado,
    $circulo
];

foreach($objetos as $objeto) {
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();
    echo "Area".$objeto->getTipo().": ".$objeto->getArea()."<br/>";
}