<!-- Crie uma classe chamada “Triângulo” com atributos para armazenar os três lados do triângulo. Implemente métodos para verificar se é um triângulo válido e calcular sua área. -->


<?php
{
    class Triangulo
    {
        public int $lado1;
        public int $lado2;
        public int $lado3;
        public int $base;
        public int $altura;

        public function conferir($lado1, $lado2, $lado3, $base, $altura)
        {
            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
            $this->lado3 = $lado3;
            $this->base = $base;
            $this->altura = $altura;

            //return $this->nome . " tem " . $this->idade . " anos.";

            // return ($this->base * $this->altura) / 2;

            return "Olá! Vamos agora conferir os lados do seu triângulo e calcular a área dele: lado 1= " .$this->lado1. ", lado 2= " .$this->lado2. ", lado 3= " .$this->lado3. ". E sua área é: " .($this->base * $this->altura)/ 2;
        }
    }
}





?>