<!-- Crie uma classe Produto com:
Propriedades: nome, preco
Método: exibirProduto()
Crie duas subclasses:
Livro (adiciona autor)
DVD (adiciona duracao)
Cada subclasse deve sobrescrever exibirProduto() para mostrar todas as informações, incluindo as específicas.-->

<?php
class Produto {
    public string $nome;
    public float $preco;
    

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function exibirProduto() {
        return "Produto: " . $this->nome . ", Preço: R$" . number_format($this->preco, 2, ',', '.');


    }

}

?>