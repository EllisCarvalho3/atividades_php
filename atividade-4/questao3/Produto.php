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
class Livro extends Produto {
    public string $autor;

    public function __construct($nome, $preco, $autor) {
        parent::__construct($nome, $preco);
        $this->autor = $autor;
    }

    public function exibirProduto() {
        return parent::exibirProduto() . ", Autor: " . $this->autor;
    }
}
class DVD extends
    Produto {
        public int $duracao; // duração em minutos
    
        public function __construct($nome, $preco, $duracao) {
            parent::__construct($nome, $preco);
            $this->duracao = $duracao;
        }
    
        public function exibirProduto() {
            return parent::exibirProduto() . ", Duração: " . $this->duracao . " minutos";
        }
    }

// Exemplo de uso
$livro = new Livro("Como eu era antes de você", 39.90, "Jojo Moyes");
$dvd = new DVD("Matrix", 29.90, 136);
echo $livro->exibirProduto() . "<br>";
echo $dvd->exibirProduto();

echo "<br>";


?>