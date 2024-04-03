<?php

// Definição de uma interface 'forma' que contém métodos para obter tipo e área
interface forma {
    public function getTipo(); // Método para obter o tipo da forma
    public function getArea(); // Método para obter a área da forma
}

// Classe Quadrado implementando a interface 'forma'
class Quadrado implements forma {
    private $largura; // Largura do quadrado
    private $altura; // Altura do quadrado

    // Construtor da classe Quadrado
    public function __construct($l, $a){
        $this->largura = $l; // Inicializa a largura
        $this->altura = $a; // Inicializa a altura
    }

    // Método para obter o tipo do quadrado
    public function getTipo() {
        return 'quadrado';
    }

    // Método para obter a área do quadrado
    public function getArea() {
        return $this->largura * $this->altura; // Retorna a área do quadrado
    }
}

// Classe Círculo implementando a interface 'forma'
class Circulo implements forma {
    private $raio; // Raio do círculo
    
    // Construtor da classe Círculo
    public function __construct($r) {
        $this->raio = $r; // Inicializa o raio do círculo
    }    

    // Método para obter o tipo do círculo
    public function getTipo() {
        return 'circulo';
    }

    // Método para obter a área do círculo
    public function getArea() {
        return pi() * ($this->raio * $this->raio); // Retorna a área do círculo
    }
}

// Instancia um objeto Quadrado com largura 5 e altura 5
$quadrado = new Quadrado(5, 5);

// Instancia um objeto Círculo com raio 7
$circulo = new Circulo(7);

// Array contendo os objetos Quadrado e Círculo
$objetos = [
    $quadrado,
    $circulo
];

// Itera sobre os objetos
foreach($objetos as $objeto) {
    $tipo = $objeto->getTipo(); // Obtém o tipo do objeto
    $area = $objeto->getArea(); // Obtém a área do objeto
    echo "Area ".$objeto->getTipo().": ".$objeto->getArea()."<br/>"; // Exibe a área do objeto
}
