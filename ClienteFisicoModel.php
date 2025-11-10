<?php

require_once __DIR__ . '/ClienteModel.php';

class ClienteFisicoModel extends ClienteModel
{
    private $nome;
    private $cpf;

    public function __construct($idCliente = "", $endereco = "", $nome = "", $cpf = "")
    {
        parent::__construct($idCliente, "Fisico", $endereco);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    // Nome
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    // CPF
    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    // toArray usa o endereco do pai
    public function toArray()
    {
        return [
            'idCliente' => $this->getIdCliente(),
            'tipoCliente' => $this->getTipoCliente(),
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'endereco' => $this->getEndereco()
        ];
    }
}
?>
