<?php

class Funcionario {
    
    private $nome;
    private $codigo;
    private $salarioBase;

    public function __construct($codigo, $nome, $salarioBase) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase) {
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioLiquido() {
        $inss = $this->salarioBase * 0.1;
        $ir = 0.0;

        if ($this->salarioBase > 2000.0) {
            $ir = ($this->salarioBase - 2000.0) * 0.12;
        }

        return $this->salarioBase - $inss - $ir;
    }

    public function __toString() {
        return get_class($this) . "\n Codigo: " . $this->getCodigo() .
            "\n Nome: " . $this->getNome() . 
            "\n Salário Base: " . $this->getSalarioBase() .
            "\n Salário Líquido: " . $this->getSalarioLiquido();
    }
}

class MestreDeObras {
    
    private $numFuncionarios;

    public function __construct($codigo, $nome, $salarioBase, $numFuncionarios) {
        __construct($codigo, $nome, $salarioBase);
        $this->numFuncionarios = $numFuncionarios;
    }

    public function getNumFuncionarios() {
        return $this->numFuncionarios;
    }

    public function setNumFuncionarios($numFuncionarios) {
        $this->numFuncionarios = $numFuncionarios;
    }

    public function getSalarioBase() {
        $adicional = 0.1 * floor($this->numFuncionarios / 10);
        return getSalarioBase() * (1 + $adicional);
    }
}

class Motorista{
    
    private $numeroCarteira;

    public function __construct($codigo, $nome, $salarioBase, $numeroCarteira) {
        __construct($codigo, $nome, $salarioBase);
        $this->numeroCarteira = $numeroCarteira;
    }

    public function getNumeroCarteira() {
        return $this->numeroCarteira;
    }

    public function setNumeroCarteira($numeroCarteira) {
        $this->numeroCarteira = $numeroCarteira;
    }
}

class Servente{
    
    private $adicionalInsalubridade = 0.05;

    public function getSalarioBase() {
        return getSalarioBase() * (1 + $this->adicionalInsalubridade);
    }
}

$funcionario = new Funcionario(1, "Igor", 2500.00);
echo $funcionario;

$servente = new Servente(2, "Hugo", 2000.00);
echo $servente;

$motorista = new Motorista(3, "Rafael", 3000.00, "123456");
echo $motorista;

$mestreDeObras = new MestreDeObras(4, "Danilo", 3500.00, 25);
echo $mestreDeObras;

?>