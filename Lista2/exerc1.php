<?php

class Ponto {
    private $x;
    private $y;
    private static $contador = 0;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        self::$contador++;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function getX() {
        return $this->x;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function getY() {
        return $this->y;
    }

    public function deslocar($dx, $dy) {
        $this->x += $dx;
        $this->y += $dy;
    }

    public function toString() {
        return "Ponto(x: " . $this->x . ", y: " . $this->y . ")";
    }

    public static function getContador() {
        return self::$contador;
    }

    public function distancia(Ponto $outro) {
        return sqrt(pow($outro->getX() - $this->x, 2) + pow($outro->getY() - $this->y, 2));
    }

    public function distanciaCoordenadas($x, $y) {
        return sqrt(pow($x - $this->x, 2) + pow($y - $this->y, 2));
    }

    public static function distanciaEntrePontos($x1, $y1, $x2, $y2) {
        return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    }
}


$p1 = new Ponto(0, 0);
$p2 = new Ponto(3, 4);

echo $p1->toString(); 
echo "\n";

echo $p2->toString(); 
echo "\n";

echo "Distância entre p1 e p2: " . $p1->distancia($p2); 
echo "\n";
 
echo "Contador de pontos criados: " . Ponto::getContador(); 
echo "\n";
?>
