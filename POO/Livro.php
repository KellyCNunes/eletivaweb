<?php

class Livro {
    private $titulo;
    private $autor;
    private $ano;

    public function __construct($titulo, $autor, $ano) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo() {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor() {
        $this->autor = $autor;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno() {
        if ($ano < 1900)
            $this->ano = 1900;
        $this->ano = $ano;
    }
}

$obj = new Livro("O livro", "Ana", 1850);
var_dump($obj);