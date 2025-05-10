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

        public function adicionarestoque($quantidade)
        {
            $this->quantidade += $quantidade;
        }

        public function removerestoque($quantidade)
        {
            if ($this->quantidade >= $quantidade) {
                $this->quantidade -= $quantidade;
            }
        }

        public function getestoque()
        {
            return $this->quantidade;
        }

        public function getpreco()
        {
            return $this->preco;
        }

        public function setpreco($preco)
        {
            $this->preco = $preco;
        }

        public function exibir()
        {
            return "Produto: $this->nome";
        }
    }
}
?>
