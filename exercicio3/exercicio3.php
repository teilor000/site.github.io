<?php
// Incluindo o arquivo que contém a classe Pessoa
include 'Pessoa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    // Criando um objeto da classe Pessoa
    $pessoa = new Pessoa($nome, $idade);

    // Exibindo os atributos da pessoa
    $pessoa->mostrarAtributos();
}
