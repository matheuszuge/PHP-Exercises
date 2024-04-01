<?php

// Definição da interface Database
interface Database {
    // Método para listar produtos
    public function listarProdutos();
    
    // Método para adicionar um produto
    public function adicionarProduto();
    
    // Método para alterar um produto
    public function alterarProduto();
}

// Classe que implementa a interface Database e representa um banco de dados MySQL
class MySqlDB implements Database {
    // Implementação do método para listar produtos
    public function listaPordutos() {

    }
    
    // Implementação do método para adicionar um produto
    public function adicionarProduto() {
    
    }
    
    // Implementação do método para alterar um produto
    public function alterarProduto()  {

    }
}

// Classe que implementa a interface Database e representa um banco de dados Oracle
class OracleDB implements Database {
    // Implementação do método para listar produtos
    public function listaPordutos() {

    }
    
    // Implementação do método para adicionar um produto
    public function adicionarProduto() {

    }
    
    // Implementação do método para alterar um produto
    public function alterarProduto() {

    }
}
