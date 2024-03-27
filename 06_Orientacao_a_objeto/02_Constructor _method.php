<?php

Class post {
    public int $likes = 0; 
    public array $comments = [];
    public string $author; 

    /*quando ele é criado, será executado sempre que 
    for criado um objeto novo */
    public function __construct($qtLikes = 0) { 
        this->likes = $qtLikes;
        echo 'teste';
    }

    public function aumentarLike() {
        echo 'abc';
        $this->likes++;
    }
}

$post1 = new post(25);
$post2 =  new post();

echo "post1 = ".$post1->likes."<br/>"