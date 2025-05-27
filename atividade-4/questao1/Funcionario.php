<!-- Crie uma classe base Funcionario com:
Propriedades: nome, salario
Método: exibirDados(), que imprime nome e salário. 

Depois, crie duas classes que herdam de Funcionario:
Gerente (adiciona a propriedade departamento)
Programador (adiciona a propriedade linguagem)
Cada subclasse deve para incluir suas novas propriedades.-->
<?php

{
    class Funcionario {
        public string $nome;
        public float $salario;

        public function __construct($nome, $salario) {
            $this->nome = $nome;
            $this->salario = $salario;
        }

        public function exibirDados() {
            return "Nome: " . $this->nome . ", Salário: R$" . number_format($this->salario, 2, ',', '.');
        }
    }

    class Gerente extends Funcionario {
        public string $departamento;

        public function __construct($nome, $salario, $departamento) {
            parent::__construct($nome, $salario);
            $this->departamento = $departamento;
        }

        public function exibirDados() {
            return parent::exibirDados() . ", Departamento: " . $this->departamento;
        }
    }

    class Programador extends Funcionario {
        public string $linguagem;

        public function __construct($nome, $salario, $linguagem) {
            parent::__construct($nome, $salario);
            $this->linguagem = $linguagem;
        }

        public function exibirDados() {
            return parent::exibirDados() . ", Linguagem: " . $this->linguagem;
        }
    }
}



?>
