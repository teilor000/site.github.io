<?php
class Carro {
    private $marca;
    private $modelo;
    private $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirFicha() {
        echo "<h3>Dados da Pessoa:</h3>";
        echo "marca: " . $this->marca . "<br>";
        echo "modelo: " . $this->modelo . " <br>";
        echo "ano: " . $this->ano . "<br>";
    }
}
?>