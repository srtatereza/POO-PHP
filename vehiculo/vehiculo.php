<?php

// Declaracion de la interfaz
interface Vehiculo {
    // Metodos con un parametro entero, devuelven un string
    public function frenar(int $distancia): string;
    public function acelerar(int $distancia): string;
}

// Clase Coche que implementa la interfaz Vehiculo
class Coche implements Vehiculo {
    // Propiedades de clase
    // Velocidad, al ser estática, es compartida entre todas las instancias de la clase
    private static int $velocidad = 0;
    private int $velocidadMaxima = 120;

    // Método para acelerar
    public function acelerar(int $distancia): string {
        // Considero que la distancia es la cantidad de velocidad que va acelerar el coche
        // Verifica que no supere la velocidad máxima
        if (self::$velocidad + $distancia > $this->velocidadMaxima) {
            self::$velocidad = $this->velocidadMaxima;
        } else {
            self::$velocidad += $distancia;
        }
        return "El coche ha acelerado y va a " . self::$velocidad . " km/hora";
    }
      // Método para frenar
      public function frenar(int $distancia): string {
        // Considero que la distancia es la cantidad de velocidad que va a frenar
        self::$velocidad -= $distancia;
        return "El coche ha frenado ya y va a " . self::$velocidad . " km/hora";
    }
}

// Clase Moto que implementa la interfaz Vehiculo
class Moto implements Vehiculo {
    // Propiedad de clase
    private static int $velocidad = 0;
    private int $velocidadMaxima = 120;

    // Método para acelerar
    public function acelerar(int $distancia): string {
        // Considero que la distancia es la cantidad de velocidad que va acelerar la moto
        // Verifica que no supere la velocidad máxima
        if (self::$velocidad + $distancia > $this->velocidadMaxima) {
            self::$velocidad = $this->velocidadMaxima;
        } else {
            self::$velocidad += $distancia;
        }
        return "La moto ha acelerado y va a " . self::$velocidad . " km/hora";
    }

      // Método para frenar
      public function frenar(int $distancia): string {
        // Considero que la distancia es la cantidad de velocidad que va a frenar
        self::$velocidad -= $distancia;
        return "La moto ha frenado ya y va a " . self::$velocidad . " km/hora";
    }
}

// Ejemplo
$coche = new Coche();
echo $coche->acelerar(100) . "<br>";
echo $coche->frenar(40) . "<br>";

$moto = new Moto();
echo $moto->acelerar(70) . "<br>";
echo $moto->frenar(50) . "<br>";



