<?php
abstract class Celular {

    protected $custoMinutoBase;
    protected $nomeOperadora;

public function __construct($ddd, $numero, $custoMinutoBase, $nomeOperadora) {
    __construct($ddd, $numero);
    $this->custoMinutoBase = $custoMinutoBase;
    $this->nomeOperadora = $nomeOperadora;
}

public function getCustoMinutoBase() {
    return $this->custoMinutoBase;
}

public function setCustoMinutoBase($custoMinutoBase) {
    $this->custoMinutoBase = $custoMinutoBase;
}

public function getNomeOperadora() {
    return $this->nomeOperadora;
}

public function setNomeOperadora($nomeOperadora) {
    $this->nomeOperadora = $nomeOperadora;
}
}
class Fixo  {

    private $custoMinuto;

    public function __construct($ddd, $numero, $custoMinuto) {
        __construct($ddd, $numero);
        $this->custoMinuto = $custoMinuto;
    }

    public function getCustoMinuto() {
        return $this->custoMinuto;
    }

    public function setCustoMinuto($custoMinuto) {
        $this->custoMinuto = $custoMinuto;
    }

    public function calculaCusto($tempo) {
        return $tempo * $this->custoMinuto;
    }
}

class PosPago{

    public function __construct($ddd, $numero, $custoMinutoBase, $nomeOperadora) {
        __construct($ddd, $numero, $custoMinutoBase, $nomeOperadora);
    }

    public function calculaCusto($tempo) {
        $custoFinal = $this->custoMinutoBase * 0.9;
        return $tempo * $custoFinal;
    }
}


class PrePago {

    public function __construct($ddd, $numero, $custoMinutoBase, $nomeOperadora) {
        __construct($ddd, $numero, $custoMinutoBase, $nomeOperadora);
    }

    public function calculaCusto($tempo) {
        $custoFinal = $this->custoMinutoBase * 1.4;
        return $tempo * $custoFinal;
    }
}

abstract class Telefone {

    protected $ddd;
    protected $numero;

    public function __construct($ddd, $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    public function getDDD() {
        return $this->ddd;
    }

    public function setDDD($ddd) {
        $this->ddd = $ddd;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    abstract public function calculaCusto($tempo);
}

$telefoneFixo = new Fixo('18', '1234-5678', 0.50);
echo "Custo da ligação fixa: R$" . $telefoneFixo->calculaCusto(10) . "<br>";

$telefonePrePago = new PrePago('18', '12345678', 0.30, 'Operadora A');
echo "Custo da ligação pré-paga: R$" . $telefonePrePago->calculaCusto(10) . "<br>";

$telefonePosPago = new PosPago('18', '12345678', 0.30, 'Operadora B');
echo "Custo da ligação pós-paga: R$" . $telefonePosPago->calculaCusto(10) . "<br>";

?>