<!-- Implemente uma classe chamada “Aluno” que possua atributos para armazenar o nome, a matrícula e as notas de um aluno. Adicione métodos para calcular a média das notas e verificar a situação do aluno (aprovado ou reprovado). -->

<?php 
{
    class Aluno
    {
        public string $nome;
        public string $matricula;
        public array $notas = [];
        public float $media;

        public function __construct($nome, $matricula)
        {
            $this->nome = $nome;
            $this->matricula = $matricula;
        }

        public function adicionarnota($nota)
        {
            $this->notas[] = $nota;
        }

        public function calcularmedia()
        {
            if (count($this->notas) === 0) {
                return 0;
            }
            $soma = array_sum($this->notas);
            $this->media = $soma / count($this->notas);
            return $this->media;
        }
}

}