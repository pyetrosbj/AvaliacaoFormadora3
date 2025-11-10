<?php

require_once __DIR__ . '/ClienteModel.php';

class ClienteJuridicoModel extends ClienteModel
{
    private $razaoSocial;
    private $cnpj;

    public function __construct($idCliente = "", $endereco = "", $razaoSocial = "", $cnpj = "")
    {
        parent::__construct($idCliente, "Juridico", $endereco);
        $this->razaoSocial = $razaoSocial;
        $this->cnpj = $cnpj;
    }

    // Razão Social
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    // CNPJ
    public function getCnpj()
    {
        return $this->cnpj;
    }
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    // toArray usa o endereco do pai
    public function toArray()
    {
        return [
            'idCliente' => $this->getIdCliente(),
            'tipoCliente' => $this->getTipoCliente(),
            'razaoSocial' => $this->razaoSocial,
            'cnpj' => $this->cnpj,
            'endereco' => $this->getEndereco()
        ];
    }
}
?>
