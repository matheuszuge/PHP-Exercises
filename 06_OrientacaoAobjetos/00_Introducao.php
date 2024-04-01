<?php

// Definição da classe Post
class Post {
    // Atributo privado para armazenar o número de likes
    private $likes = 0;
    
    // Atributo público para armazenar os comentários
    public $comments = [];
    
    // Atributo público para armazenar o autor do post
    public $author;

    // Método público para aumentar o número de likes
    public function aumentarLike() {
        $this->likes++; // Incrementa o número de likes
    }
}

// Criando uma instância da classe Post
$post1 = new Post();
$post1->aumentarLike(); // Chamando o método aumentarLike() para o post1

// Criando outra instância da classe Post
$post2 =  new Post();
$post2->aumentarLike(); // Chamando o método aumentarLike() para o post2

?>