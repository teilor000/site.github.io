<?php
class Produto
{
    private $produto;
    private $preco;


    public function __construct($produto, $preco,)
    {
        $this->produto = $produto;
        $this->preco = $preco;
    }

    public function exibirInformacoes()
    {
        echo "<h3>Dados do produto</h3>";
        echo "Produto: " . $this->produto . "<br>";
        echo "Preço: " . $this->preco . " Dolares<br>";
    }
}
