<?php
// Incluindo o arquivo que contém a classe Pessoa
include 'Carro.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];

    // Criando um objeto da classe Pessoa
    $carro = new Carro($marca, $modelo, $ano);

    // Exibindo os atributos da pessoa
    $carro->exibirFicha();
}
?>