<?php

// Definindo a classe "Post"
class Post {
    // Definindo uma propriedade pública "likes" inicializada com o valor 0
    public int $likes = 0; 
    
    // Definindo uma propriedade pública "comments" inicializada como um array vazio
    public array $comments = [];
    
    // Definindo uma propriedade pública "author"
    public string $author; 

    // Método construtor da classe
    // Será executado sempre que um novo objeto for criado
    public function __construct($qtLikes = 0) { 
        // Inicializando a propriedade "likes" com o valor passado como parâmetro
        $this->likes = $qtLikes;
        // Exibindo a string "teste" quando o objeto é criado
        echo 'teste';
    }

    // Método para aumentar o número de likes
    public function aumentarLike() {
        // Exibindo a string "abc" quando o método é chamado
        echo 'abc';
        // Incrementando o número de likes
        $this->likes++;
    }
}

// Criando uma instância da classe "Post" e passando 25 como número inicial de likes
$post1 = new Post(25);
// Criando outra instância da classe "Post" sem passar um número inicial de likes
$post2 =  new Post();

// Exibindo o número de likes do post1
echo "post1 = ".$post1->likes."<br/>";