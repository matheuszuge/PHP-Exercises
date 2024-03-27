<?php

Class post {
    public int $likes = 0; 
    public array $comments = [];
    public string $author; 


    public function setAuthor($n) { 
        $this->author = $n;
}
    public function getAuthor() {
        return $this->author;
    } 

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
$post1->setAuthor('Matheus')
$post2 =  new post();
$post1->setAuthor('Matheus')


echo "post1 = ".$post1->likes."<br/>"