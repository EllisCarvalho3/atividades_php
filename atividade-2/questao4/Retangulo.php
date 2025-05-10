<!-- Crie uma classe chamada “Retângulo” que possua atributos para armazenar a largura e a altura. Implemente métodos para calcular a área e o perímetro do retângulo. -->

<?php
{
     class Retangulo
    {
        public int $base;
        public int $altura;

        public function conferir($base, $altura)
        {
            $this->base = $base;
            $this->altura = $altura;

            return "Base do seu retângulo e cálculo da área dele: base= " .$this->base. ", altura= " .$this->altura. ". E sua área é: " .($this->base * $this->altura). " e seu perímetro é: " .($this->base * 2 + $this->altura * 2);
        }
        
        
    }
}
?>  