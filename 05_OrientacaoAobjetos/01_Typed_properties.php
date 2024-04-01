<?php

// Definindo a classe "Post"
class Post {
    // Propriedade tipada para armazenar o número de likes (somente inteiros são permitidos)
    public int $likes = 0; 
    
    // Propriedade tipada para armazenar os comentários (somente arrays são permitidos)
    public array $comments = []; 
    
    // Propriedade tipada para armazenar o autor do post (somente strings são permitidas)
    public string $author; 

    // Método para aumentar o número de likes
    public function aumentarLike() {
        // Incrementando o número de likes
        $this->likes++;
    }
}

// Criando uma instância da classe "Post"
$post1 = new Post();
// Chamando o método para aumentar os likes do post1
$post1->aumentarLike();

// Criando outra instância da classe "Post"
$post2 =  new Post();
// Chamando o método para aumentar os likes do post2
$post2->aumentarLike();