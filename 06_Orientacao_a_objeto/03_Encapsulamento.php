<?php
class Post {
    // Definindo uma propriedade pública "likes" inicializada com o valor 0
    public int $likes = 0; 
    
    // Definindo uma propriedade pública "comments" inicializada como um array vazio
    public array $comments = [];
    
    // Definindo uma propriedade privada "author" para encapsulamento
    private string $author; 
    
    // Método para definir o autor do post
    public function setAuthor($n) { 
        $this->author = $n;
    }
    
    // Método para obter o autor do post
    public function getAuthor() {
        return $this->author;
        
    } 

    // Método construtor da classe
    public function __construct($qtLikes = 0) { 
        // Inicializando a propriedade "likes" com o valor passado como parâmetro
        $this->likes = $qtLikes;
        echo 'teste';
    }

    // Método para aumentar o número de likes
    public function aumentarLike() {
        echo 'abc';
        $this->likes++;
    }
}

// Criando uma instância da classe "Post" e passando 25 como número inicial de likes
$post1 = new Post(25);
// Definindo o autor do post1 como "Matheus"
$post1->setAuthor('Matheus');

// Criando outra instância da classe "Post" sem passar um número inicial de likes
$post2 =  new Post();
// Definindo o autor do post2 como "Matheus"
$post2->setAuthor('Matheus');

// Exibindo o número de likes do post1
echo "post1 = ".$post1->likes."<br/>";