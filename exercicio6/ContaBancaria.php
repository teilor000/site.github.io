<?php
class Pessoa
{
    private $titular;
    private $conta;
    private $saldoI;

    public function __construct($titular, $conta, $saldoI)
    {
        $this->titular = $titular;
        $this->conta = $conta;
        $this->saldoI = $saldoI;
    }

    public function ContaBancaria()
    {
        echo "<h3>Dados da Conta:</h3>";
        echo "titular: " . $this->titular . "<br>";
        echo "conta número: " . $this->conta . " <br>";
    }
}
