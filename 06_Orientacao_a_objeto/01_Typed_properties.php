<?php

/*Podemos utilizar typed properties(propriedades tipadas) 
para poder proteger as propriedades para poder receber 
somente um tipo de informação */

//Exemplo anterior
Class post {
    //atributos
    public int $likes = 0; //Propriedade so receberá valores inteiros
    public array $comments = []; // recebe somente array
    public string $author; // recebe somente string

    //Metodo
    public function aumentarLike() {
        $this->likes++;
    }
}

$post1 = new post();
$post1->aumentarLike();


$post2 =  new post();
$post2->aumentarLike();
//