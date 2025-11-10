<?php

class VendaModel
{
    private $idVenda;
    private $dataVenda;
    private $formaPagto;
    private $cliente; // Pode ser ClienteFisicoModel ou ClienteJuridicoModel
    private $itens = []; // Array de ItemVendaLivroModel

    // === Getters e Setters ===
    public function getIdVenda()
    {
        return $this->idVenda;
    }
    public function setIdVenda($idVenda)
    {
        $this->idVenda = $idVenda;
    }

    public function getDataVenda()
    {
        return $this->dataVenda;
    }
    public function setDataVenda($dataVenda)
    {
        $this->dataVenda = $dataVenda;
    }

    public function getFormaPagto()
    {
        return $this->formaPagto;
    }
    public function setFormaPagto($formaPagto)
    {
        $this->formaPagto = $formaPagto;
    }

    public function getCliente()
    {
        return $this->cliente;
    }
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getItens()
    {
        return $this->itens;
    }
    public function setItens($itens)
    {
        $this->itens = $itens;
    }

    // === Métodos úteis ===

    // Retorna o valor total da venda somando os itens
    public function getValorTotal()
    {
        $total = 0;
        foreach ($this->itens as $item) {
            $total += $item->getLivro()->getValor() * $item->getQtdeVendida();
        }
        return $total;
    }

    // Converte o objeto em array para exibição ou JSON
    public function toArray()
    {
        return [
            'idVenda' => $this->idVenda,
            'dataVenda' => $this->dataVenda,
            'formaPagto' => $this->formaPagto,
            'valorTotal' => $this->getValorTotal(),
            'cliente' => $this->cliente ? $this->cliente->toArray() : null,
            'itens' => array_map(function ($item) {
                return $item->toArray();
            }, $this->itens)
        ];
    }
}
?>
