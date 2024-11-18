<?php

abstract class Figura {
  abstract public function area();
}

class Cuadrado extends Figura {
  private $lado;

  public function __construct($lado) {
    $this->lado = $lado;
  }

  public function area() {
    return $this->lado * $this->lado;
  }
}

class Circulo extends Figura {
  private $radio;
  const PI = 3.14159; 

  public function __construct($radio) {
    $this->radio = $radio;
  }

  public function area() {
    return self::PI * pow($this->radio, 2);
  }
}