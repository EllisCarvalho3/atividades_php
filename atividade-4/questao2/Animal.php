<!-- Crie uma classe Animal com:
Propriedade: nome
Método: fazerSom(), que imprime "Som genérico".
Crie as subclasses:
Cachorro (sobrescreve fazerSom() para imprimir "Au au!")
Gato (sobrescreve fazerSom() para imprimir "Miau!")
Crie um script para instanciar um Cachorro e um Gato, e chamar fazerSom() para cada um. -->


<?php
class Animal {
    public string $nome;

    public function fazerSom() {
        return "Som genérico";
    }
}
class Cachorro extends Animal {
    public function fazerSom() {
        return "Au au!";
    }
}
class Gato extends Animal {
    public function fazerSom() {
        return "Miau!";
    }
}
$cachorro = new Cachorro();
$cachorro->nome = "Rex";
$gato = new Gato();
$gato->nome = "Mia";
echo $cachorro->nome . " faz: " . $cachorro->fazerSom() . "<br>";
echo $gato->nome . " faz: " . $gato->fazerSom();

echo "<br>";


?>