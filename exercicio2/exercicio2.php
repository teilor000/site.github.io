<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $numero1 = $_POST['nmr1'];
    $numero2 = $_POST['nmr2'];
    $numero3 = $_POST['nmr3'];
    $nota = ($numero1 + $numero2 + $numero3)/3;
    
    if ( $nota >= 7) {
    echo "aprovado";
    }else {
    echo "reprovado";
    }

}
?>