<?php

//   SOBREESCRITURA DE METODOS   /////////////////////////////////////////////////////////////////////////////////////////////////////////

class Animal {
    public function hacerSonido(): void {
        echo "El animal hace un sonido.<br>";
    }
}

class Perro extends Animal {
    // Sobrescribe el método hacerSonido
    public function hacerSonido(): void {
        echo "El perro dice: ¡Guau!<br>";
    }
}

class Gato extends Animal {
    // Sobrescribe el método hacerSonido
    public function hacerSonido(): void {
        echo "El gato dice: ¡Miau!<br>";
    }
}

// Crear instancias y llamar a los métodos
$animal = new Animal();
$animal->hacerSonido(); // Llamada al método de la clase base

$perro = new Perro();
$perro->hacerSonido(); // Llamada al método sobrescrito en la clase Perro

$gato = new Gato();
$gato->hacerSonido(); // Llamada al método sobrescrito en la clase Gato

//   STDCLASS   /////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
    clase genérica que actúa como un contenedor simple y flexible para almacenar datos en forma de objetos sin necesidad de definir una clase personalizada. 
 */
$cerveza = new stdClass();

$cerveza->nom = "Erdinger";
$cerveza->alc = 8.5;

$cerveza->name = "Erdinger Pikantus";
echo $cerveza->nom . " " . $cerveza->alc . "<br>"; 

//   CONVERSION DE ARRAYS A OBJETOS   /////////////////////////////////////////////////////////////////////////////////////////////////////////

$arr = (array) $cerveza;
echo $arr["alc"] . "<br>"; 

$objNuevo = (object) $arr;
echo $objNuevo->nom ."<br>";