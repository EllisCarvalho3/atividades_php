<!-- Crie uma classe ContaBancaria com os atributos titular e saldo. Implemente os métodos depositar($valor) e sacar($valor). O saque só deve ocorrer se houver saldo suficiente. Crie uma conta, deposite R$500 e tente sacar R$600 e depois R$400. -->

<?php

class ContaBancaria {
    public string $titular;
    public float $saldo;

    public function __construct(string $titular, float $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "<strong>Depósito de R$ {$valor} realizado com sucesso seu nenemzinho.</strong><br>";
        }
    }

    public function sacar(float $valor): void {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente para sacar R$ {$valor}. Saldo atual: R$ {$this->saldo}.<br>";
        } else {
            $this->saldo -= $valor;
            echo "<strong>Saque de R$ {$valor} realizado com sucesso nenemzinho. </strong> Saldo atual: R$ {$this->saldo}.<br>";
        }
    }

    public function getSaldo(): float {
        return $this->saldo;
    }
}

?>

