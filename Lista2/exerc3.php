<?php
abstract class Celular {

    protected $custoPorMinutoBase;
    protected $nomeOperadora;

public function __construct($ddd, $numero, $custoPorMinutoBase, $nomeOperadora) {
    __construct($ddd, $numero);
    $this->custoPorMinutoBase = $custoPorMinutoBase;
    $this->nomeOperadora = $nomeOperadora;
}

public function getCustoPorMinutoBase() {
    return $this->custoPorMinutoBase;
}

public function setCustoPorMinutoBase($custoPorMinutoBase) {
    $this->custoPorMinutoBase = $custoPorMinutoBase;
}

public function getNomeOperadora() {
    return $this->nomeOperadora;
}

public function setNomeOperadora($nomeOperadora) {
    $this->nomeOperadora = $nomeOperadora;
}
}
class Fixo  {

    private $custoPorMinuto;

    public function __construct($ddd, $numero, $custoPorMinuto) {
        __construct($ddd, $numero);
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function getCustoPorMinuto() {
        return $this->custoPorMinuto;
    }

    public function setCustoPorMinuto($custoPorMinuto) {
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function calculaCusto($tempo) {
        return $tempo * $this->custoPorMinuto;
    }
}

class PosPago{

    public function __construct($ddd, $numero, $custoPorMinutoBase, $nomeOperadora) {
        __construct($ddd, $numero, $custoPorMinutoBase, $nomeOperadora);
    }

    public function calculaCusto($tempo) {
        $custoFinal = $this->custoPorMinutoBase * 0.9;
        return $tempo * $custoFinal;
    }
}


class PrePago {

    public function __construct($ddd, $numero, $custoPorMinutoBase, $nomeOperadora) {
        __construct($ddd, $numero, $custoPorMinutoBase, $nomeOperadora);
    }

    public function calculaCusto($tempo) {
        $custoFinal = $this->custoPorMinutoBase * 1.4;
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

$telefonePrePago = new PrePago('18', '111111222', 0.30, 'Operadora X');
echo "Custo da ligação pré-paga: R$" . $telefonePrePago->calculaCusto(10) . "<br>";

$telefonePosPago = new PosPago('18', '222222111', 0.30, 'Operadora Y');
echo "Custo da ligação pós-paga: R$" . $telefonePosPago->calculaCusto(10) . "<br>";

?>