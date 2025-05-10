<!-- Implemente uma classe chamada “Produto” que possua atributos para armazenar o nome, o preço e a quantidade em estoque. Adicione métodos para calcular o valor total em estoque e verificar se o produto está disponível. -->

<?php
{
    class Produto
    {
        public string $nome;
        public float $preco;
        public int $quantidade;

        public function __construct($nome, $preco, $quantidade)
        {
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
        }

        public function valortotal()
        {
            return $this->preco * $this->quantidade;
        }

        public function verificardisponibilidade()
        {
            return $this->quantidade > 0 ? "Produto disponível" : "Produto indisponível";
        }
    }
}