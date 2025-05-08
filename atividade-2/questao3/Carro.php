<!-- .Implemente uma classe chamada “Carro” com atributos para armazenar a marca, o modelo e a velocidade atual do carro. Adicione métodos para acelerar, frear e exibir a velocidade atual. -->


<?php
class Carro
{
    public string $marca;
    public string $modelo;
    public int $velocidade = 0;

    // criei esse metodo para exibir as informações gerias do veículo

    public function exibir($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;

        return "Olá. A marca do seu carro é $this->marca e o modelo é $this->modelo.";

 
    }

    // criei o método para acelerar usando o if e else para caso a pessoa ultrapasse um valor permitido
    public function acelerar($valor)
    {
        $this->velocidade += $valor;

        if ($this->velocidade > 80) {
            return "Reduza sua velocidade! Você está a " . $this->velocidade . " km/h.<br>";
        } else {
            return "Acelerando... Velocidade atual: " . $this->velocidade . " km/h.<br>";
        }
    }

    // criei o método para frear com if e else também para caso a pessoa deva acelarar mais a velocidade
    public function frear($valor)
    {
        $this->velocidade -= $valor;

        if ($this->velocidade < 30) {
            return "Acelere! Sua velocidade está em " . $this->velocidade . " km/h.<br>";
        } else {
            return "Freando... Velocidade atual: " . $this->velocidade . " km/h.<br>";
        }
    }
}
?>
