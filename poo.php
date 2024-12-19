<?php

class Venta{
    public $total;
    public $date;
    public function __construct($total, $date) {//en php los constructores no llevan el nombre de la clase sino la palabra reservada __construct
        $this->total = $total;
        $this->date = $date; 
    }
    public function __destruct(){
        echo "Se ha eliminado el objeto<br>";
    }
    public function createInvoice(){
        echo"Se crea la factura<br>";
    }
}
$venta = new Venta(18,date("D-m-y"));//date() asigna la fecha actual en ese formato

$venta->createInvoice();

//   PROPIEDADES Y METODOS ESTATICOS   /////////////////////////////////////////////////////////////////////////////////////////////////////////

//Algo estatico pertenece a la clase y NO a sus instancias
class Calculadora {
    public $numero1;
    public $numero2;
    public static $contadorInstancias = 0;
    public function __construct($numero1, $numero2) {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
        self::$contadorInstancias++;//self:: para acceder a propiedades o métodos estáticos dentro de la misma clase 
    }
    public static function sumar($a, $b) {
        return $a + $b;
    }
}
$calc1 = new Calculadora(5, 3);
$calc2 = new Calculadora(10, 7);

echo "Instancias creadas: " . Calculadora::$contadorInstancias . "<br>";// El . se usa para concatenar dos strings *** 
echo "Suma estática: " . Calculadora::sumar(2, 3) . "<br>";

/*  
    El TIPADO es una buena practica para especificar el tipo de la propiedad o que devuelve el metodo para eliminar ambiguedades. Ej: 
    public string $nombre;
    public function saludar(): string {}

    Los UNION TYPES en PHP permiten especificar que una propiedad, parámetro de un método o valor de retorno puede aceptar más de un tipo de dato. En:
    
    class Producto {
        public int|float $precio; // El precio puede ser un entero o un decimal
    }

*/

