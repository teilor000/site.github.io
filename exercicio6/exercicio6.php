<?php
// Incluindo o arquivo que contém a classe Pessoa
include 'ContaBancaria.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $titular = $_POST['titular'];
    $conta = $_POST['conta'];
    $saldoI = $_POST['saldoI'];

    // Criando um objeto da classe Pessoa
    $pessoa = new Pessoa($titular, $conta, $saldoI);

    // Exibindo os atributos da pessoa
    $pessoa->ContaBancaria();
}
