<?php

class ClienteModel
{
    protected $idCliente;
    protected $tipoCliente;
    protected $endereco;

    public function __construct($idCliente = "", $tipoCliente = "", $endereco = "")
    {
        $this->idCliente = $idCliente;
        $this->tipoCliente = $tipoCliente;
        $this->endereco = $endereco;
    }

    // ID
    public function getIdCliente()
    {
        return $this->idCliente;
    }
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    // Tipo (Físico / Jurídico)
    public function getTipoCliente()
    {
        return $this->tipoCliente;
    }
    public function setTipoCliente($tipoCliente)
    {
        $this->tipoCliente = $tipoCliente;
    }

    // Endereço
    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    // Retorna os dados como array associativo (pode ser sobrescrito pelos filhos)
    public function toArray()
    {
        return [
            'idCliente' => $this->idCliente,
            'tipoCliente' => $this->tipoCliente,
            'endereco' => $this->endereco
        ];
    }
}

?>
