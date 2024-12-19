<?php

//   HERENCIA   /////////////////////////////////////////////////////////////////////////////////////////////////////////

class Vehiculo {
    public string $marca;
    public string $modelo;
    public function __construct(string $marca, string $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    // Método Getter para la propiedad marca
    public function getMarca(): string {
        return $this->marca;
    }

    // Método Setter para la propiedad marca
    public function setMarca(string $marca): void {
        $this->marca = $marca;
    }

    // Método Getter para la propiedad modelo
    public function getModelo(): string {
        return $this->modelo;
    }

    // Método Setter para la propiedad modelo
    public function setModelo(string $modelo): void {
        $this->modelo = $modelo;
    }
    public function obtenerDetalles(): string {// Método que puede ser usado por la subclase
        return "Marca: $this->marca, Modelo: $this->modelo";//Devuelve un string
    }
}
class Coche extends Vehiculo {
    public int $puertas;
    public function __construct(string $marca, string $modelo, int $puertas) {// Constructor que amplía el de la clase base
        parent::__construct($marca, $modelo); // Llamada al constructor de la clase base
        $this->puertas = $puertas;
    }
    public function getPuertas(): int {
        return $this->puertas;
    }

    // Setter para la propiedad puertas
    public function setPuertas(int $puertas): void {
        $this->puertas = $puertas;
    }

    // Método adicional en la subclase
    public function obtenerDetalles(): string {
        return parent::obtenerDetalles() . ", Puertas: $this->puertas, <br>";// parent:: se utiliza para llamar a metodos o acceder a propiedades de la clase padre de la actual 
    }
}

// Crear instancia de la clase base
$vehiculo = new Vehiculo("Toyota", "Corolla");
echo $vehiculo->obtenerDetalles() . "<br>";

// Crear instancia de la subclase
$coche = new Coche("Ford", "Focus", 4);
echo $coche->obtenerDetalles();

$coche->setMarca("Chevrolet");
$coche->setModelo("Cruze");
$coche->setPuertas(5);

echo $coche->obtenerDetalles() . "<br>";

//   ENCAPSULAMIENTO   /////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
    Private: Puede ser visto SOLO por la propia clase
    Protected: Puede ser visto por la propia clase y sus HIJOS
    Public: Puede ser visto por TODOS
*/ 
