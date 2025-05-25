<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $numero1 = $_POST['nmr1'];
    
    if ($numero1 % 2 == 0) {

    echo "é par";
    }else {
    echo "é ímpar";
    }

}
?>