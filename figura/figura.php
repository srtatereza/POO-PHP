<?php

// Clase abstracta Figura
abstract class Figura {
    // Variables de instancia
    // No hay double en php, pero hay float
    protected float $x;
    protected float $y;

    // Constructor con argumentos
    public function __construct($x, $y) {
        // Se utiliza this para referenciar la variable de instancia
        $this->x = $x;
        $this->y = $y;
    }

    // Método abstracto para calcular el área
    abstract public function calcularArea(): float;
}

// Clase Cuadrado que hereda de la clase Figura
class Cuadrado extends Figura {
    // Variable de clase, es compartida entre todas las instancias de la clase porque es estatica
    private static float $lado;

    // Constructor con argumentos
    public function __construct($x, $y, $lado) {
        // Se utiliza parent::__construct para llamar al constructor de la clase padre
        parent::__construct($x, $y);
        // Se utiliza self para referenciar la variable de clase
        self::$lado = $lado;
    }

    // Implementación del método abstracto
    public function calcularArea(): float {
        // Formula para calcular el area de un cuadrado
        return self::$lado ** 2;
    }
}

// Clase Circulo que hereda de la clase Figura
class Circulo extends Figura {
    // Variable de clase, es compartida entre todas las instancias de la clase porque es estatica
    private static float $radio;

    // Constructor con argumentos
    public function __construct($x, $y, $radio) {
        // Se utiliza parent::__construct para llamar al constructor de la clase padre
        parent::__construct($x, $y);
        // Se utiliza self para referenciar la variable de clase
        self::$radio = $radio;
    }

    // Implementación del método abstracto
    public function calcularArea(): float {
        // Formula para calcular el area de un circulo
        return pi() * self::$radio ** 2;
    }
}

// Ejemplos
$cuadrado = new Cuadrado(0, 0, 4);
echo "Área del cuadrado: " . $cuadrado->calcularArea() . "<br>";

$circulo = new Circulo(0, 0, 4);
echo "Área del circulo: " . $circulo->calcularArea() . "<br>";
