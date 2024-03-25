<?php

Class post {
    public int $likes = 0; 
    public array $comments = [];
    public string $author; 

    /*quando ele é criado, será executado sempre que 
    for criado um objeto novo */
    public function __construct() { 
        echo 'teste';
    }

    public function aumentarLike() {
        echo 'abc';
        $this->likes++;
    }
}

$post1 = new post();
$post1 ->likes = 20;


$post2 =  new post();

