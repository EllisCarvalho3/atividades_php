<!-- criar uma classe usando extends para cliente fisico e juridico, ou seja, a class cliente possui atributos universais (endereço, bairro e verendereço), enquanto que o fisico (tem cpf, nome e o atributo para ver a informação do usuário) e juridico (tem cnpj, ver nome fantasia e ver a informação da empresa) possuem atributos únicos -->

<?php
class Cliente {
    public string $endereco;
    public string $bairro;

    public function __construct($endereco, $bairro)
    {
        $this->endereco = $endereco;
        $this->bairro = $bairro;
    }

    public function verEndereco()
    {
        return "Endereço: " . $this->endereco . ", Bairro: " . $this->bairro;
    }
}

class ClienteFisico extends Cliente
{
    public string $cpf;
    public string $nome;

    public function __construct($cpf, $nome, $endereco, $bairro)
    {
        parent::__construct($endereco, $bairro); //para chamar um método estático de uma classe filha, usei parent dentro da classe filha.
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function verInformacao()
    {
        return "Nome: " . $this->nome . ", CPF: " . $this->cpf . ", " . $this->verEndereco();
    }
}

class ClienteJuridico extends Cliente
{
    public string $cnpj;
    public string $nomeFantasia;

    public function __construct($cnpj, $nomeFantasia, $endereco, $bairro)
    {
        parent::__construct($endereco, $bairro);
        $this->cnpj = $cnpj;
        $this->nomeFantasia = $nomeFantasia;
    }

    public function verInformacao()
    {
        return "Nome Fantasia: " . $this->nomeFantasia . ", CNPJ: " . $this->cnpj . ", " . $this->verEndereco();
    }
}
?>