<?php

class post {
    private int $id;
    private int $likes = 0; 

    public function setId($i) {
        $this->id = $i;
    }
    public function getId() {
        return $this->id; 
    }

    public function setLikes($i) {
        $this->likes = $i;
    }
    public function getLikes() {
        return $this->likes; 
    }
}

class Foto extends post {
    private $url; 

    public function getUrl(){
        retunr $this->url;
    }

 /* Quando for  criado um objeto novo o construtor irá gerar um id */
    public function __construct($id) {
        return $this->setID($id)
    }

}

$foto = new Foto(20);
$foto->setLikes(12);
$foto->setId(12);



?>