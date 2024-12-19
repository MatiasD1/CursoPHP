<?php

/*
Plantillas que obligan a los desarrolladores a trabajar con una estructura fija en cada una de las clases
su existencia no afecta a la ejecucion del programa sino que sirven unicamente como guia. 
*/
interface MiInterfaz {
    public function metodo1(): string; // Método obligatorio
    public function metodo2(int $param): void; // Otro método obligatorio
}

interface Transporte {
    public function acelerar(int $velocidad): void;
    public function frenar(): void;
}

class Auto implements Transporte {
    public function acelerar(int $velocidad): void {
        echo "El auto acelera a $velocidad km/h<br>";
    }
    public function frenar(): void {
        echo "El auto se detiene<br>";
    }
}

// Uso
$coche = new Auto();
$coche->acelerar(100);
$coche->frenar();

//   INTERFACES Y HERENCIA  /////////////////////////////////////////////////////////////////////////////////////////////////////////

interface Volador {
    public function volar(): void;
}

interface Acuatico {
    public function nadar(): void;
}

class Pato implements Volador, Acuatico {
    public function volar(): void {
        echo "El pato vuela<br>";
    }
    public function nadar(): void {
        echo "El pato nada<br>";
    }
}

$pato = new Pato();
$pato->volar();
$pato->nadar();
