<?php

$person = new Person();
$person->name = "Juan";
echo $person->name . "<br>";
echo $person->age . "<br>";
$person->adress = "Calle tal";

/* ###
    $person->age = 30; // Guarda 'age' en $data con valor 30.
echo $person->age; // Devuelve 30 si existe en $data.
*/
class Person{
    public int $id;
    public string $name;
    public array $data = [];
    /*  ###   
        public function __get(string $name){//get se ejecuta cuando intento acceder a una propiedad que no existe
            echo "No existe $name en el objeto<br>";
        }
        public function __set(string $name, string $value){//set se ejecuta cuando intento agregar un valor a una propiedad que no existe
            echo "No puedes agregar $value a $name<br>";
        }
    */
    public function __get(string $name){//get se ejecuta cuando intento acceder a una propiedad que no existe
        return $this->data[$name];
    }
    public function __set(string $name, string $value){//set se ejecuta cuando intento agregar un valor a una propiedad que no existe
        $this->data[$name] = $value; 
    }
}
/*
    Con la primera implementación, simplemente bloqueas la creación de propiedades dinámicas e informas de ello mediante mensajes. 
    En cambio, con la segunda implementación, fuerzas la creación y gestión de propiedades dinámicas almacenándolas en el arreglo interno $data.
    Esta última es útil cuando necesitas flexibilidad para añadir propiedades que no estaban previamente definidas en la clase. 
*/