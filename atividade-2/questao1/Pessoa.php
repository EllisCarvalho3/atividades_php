<!-- Crie uma classe chamada Pessoa com os atributos nome e idade. Implemente um método apresentar() que exibe o nome e a idade da pessoa. Instancie dois objetos da classe e chame o método apresentar() para ambos. --> 


<?php
{ 
    class Pessoa 
{
    public string $nome;
    public int $idade;

    public function apresentar($nome, $idade) 
    {
        $this->nome = $nome;
        $this->idade = $idade;


         return $this->nome . " tem " . $this->idade . " anos.";
    }
    
}

}

?>