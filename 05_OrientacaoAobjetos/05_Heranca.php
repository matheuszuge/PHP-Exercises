<?php

// Definição da classe base 'post'
class post {
    private int $id; // ID do post
    private int $likes = 0; // Contagem de likes, inicializada como zero

    // Método para definir o ID do post
    public function setId($i) {
        $this->id = $i;
    }

    // Método para obter o ID do post
    public function getId() {
        return $this->id; 
    }

    // Método para definir a contagem de likes
    public function setLikes($i) {
        $this->likes = $i;
    }

    // Método para obter a contagem de likes
    public function getLikes() {
        return $this->likes; 
    }
}

// Definição da classe 'Foto' que herda da classe base 'post'
class Foto extends post {
    private $url; // URL da foto

    // Método para obter a URL da foto
    public function getUrl(){
        return $this->url;
    }

    // Construtor da classe Foto
    // Quando um objeto Foto é criado, o construtor atribui um ID e inicializa a URL
    public function __construct($id) {
        $this->setId($id); // Define o ID usando o método da classe base
    }
}

// Instancia um objeto Foto com ID 20
$foto = new Foto(20);
$foto->setLikes(12); // Define a contagem de likes como 12
$foto->setId(12); // Define o ID como 12
