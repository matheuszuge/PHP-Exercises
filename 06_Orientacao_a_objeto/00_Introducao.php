<?php

//------- definição de classe post ----//

Class post {
    private $likes = 0;
    public $comments = [];
    public $author;
}

$post1 = new post();
$post2 =  new post();


//------ criação de metodos -------//

Class post {
    //atributos
    private $likes = 0;
    public $comments = [];
    public $author;

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


?>