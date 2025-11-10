<?php

class LivroModel
{
    // 🔹 Atributos conforme o diagrama e o código do DAO
    private $idLivro;
    private $isbn;
    private $titulo;
    private $anoPublicacao;
    private $qtdeEstoque;
    private $valor;
    private $editora; // este será um objeto EditoraModel

    // 🔹 Getters e Setters
    public function getIdLivro()
    {
        return $this->idLivro;
    }

    public function setIdLivro($idLivro)
    {
        $this->idLivro = $idLivro;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAnoPublicacao()
    {
        return $this->anoPublicacao;
    }

    public function setAnoPublicacao($anoPublicacao)
    {
        $this->anoPublicacao = $anoPublicacao;
    }

    public function getQtdeEstoque()
    {
        return $this->qtdeEstoque;
    }

    public function setQtdeEstoque($qtdeEstoque)
    {
        $this->qtdeEstoque = $qtdeEstoque;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getEditora()
    {
        return $this->editora;
    }

    public function setEditora($editora)
    {
        $this->editora = $editora;
    }

    // 🔹 Método para converter o objeto em um array associativo
    public function toArray()
    {
        return [
            'id_livro' => $this->getIdLivro(),
            'isbn' => $this->getIsbn(),
            'titulo' => $this->getTitulo(),
            'ano_publicacao' => $this->getAnoPublicacao(),
            'quantidade_estoque' => $this->getQtdeEstoque(),
            'valor' => $this->getValor(),
            'editora' => $this->getEditora() ? $this->getEditora()->toArray() : null
        ];
    }
}