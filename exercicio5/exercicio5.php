<?php
// Incluindo o arquivo que contém a classe Pessoa
include 'Produto.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];

    // Criando um objeto da classe Pessoa
    $produto = new Produto($produto, $preco);

    // Exibindo os atributos da pessoa
    $produto->exibirInformacoes();
}
