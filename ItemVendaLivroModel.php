<?php
// Models/ItemVendaLivroModel.php

class ItemVendaLivroModel
{
    private $livro;      // LivroModel
    private $venda;      // VendaModel
    private $qtdeVendida;

    public function __construct($livro = null, $venda = null, $qtdeVendida = 0)
    {
        $this->livro = $livro;
        $this->venda = $venda;
        $this->qtdeVendida = $qtdeVendida;
    }

    // Livro
    public function getLivro()
    {
        return $this->livro;
    }
    public function setLivro($livro)
    {
        $this->livro = $livro;
    }

    // Venda
    public function getVenda()
    {
        return $this->venda;
    }
    public function setVenda($venda)
    {
        $this->venda = $venda;
    }

    // Quantidade vendida
    public function getQtdeVendida()
    {
        return $this->qtdeVendida;
    }
    public function setQtdeVendida($qtde)
    {
        $this->qtdeVendida = $qtde;
    }

    // Converter para array (compatível com VendaModel::toArray)
    public function toArray()
    {
        return [
            'livro' => $this->livro ? (method_exists($this->livro, 'toArray') ? $this->livro->toArray() : (array)$this->livro) : null,
            'qtdeVendida' => $this->qtdeVendida
        ];
    }
}
?>
