<?php
//Navegador: http://localhost/Curso/Variables/ 

//   SINTAXIS   /////////////////////////////////////////////////////////////////////////////////////////////////////////

$a = 105;//creo variable
$saludo = "Buen día! ";
echo "$saludo Tengo $a años<br>";
echo gettype( $a ); 

//   CONDICIONALES   /////////////////////////////////////////////////////////////////////////////////////////////////////////

if($a != 105)
    echo (" No tiene 105");
else
    echo (" Tiene 105");
 $dia = "lunes";

switch ($dia) {
    case "lunes":
        echo "<br>Hoy es lunes. ¡Ánimo para empezar la semana!<br>";
        break;
    case "viernes":
        echo "Hoy es viernes. ¡Ya casi es fin de semana!";
        break;
    case "domingo":
        echo "Hoy es domingo. ¡Disfruta tu descanso!";
        break;
    default:
        echo "Es un día normal.";
        break;
}

$valor = $a > 100 ? "Centenario<br>" : "Minugenario<br>" ; 
echo  $valor;

//   CICLOS   /////////////////////////////////////////////////////////////////////////////////////////////////////////

$b = 1;
while ($b <= 3) {
    echo "El valor de b es: $b <br>";
    $b++;
}

$c = 1;
do {
    echo "El valor de c es: $c <br>";
    $c++;
} while ($c <= 3);
echo "<br>";
for ($i = 1; $i <= 6; $i++) {
    if ($i % 2 == 0) { // Si el número es par
        continue; // Salta al siguiente ciclo
    }
    echo "El número impar es: $i <br>";
}

//   FUNCIONES   /////////////////////////////////////////////////////////////////////////////////////////////////////////

echo add(2, 5);//No importa donde se haga el llamado
function add(int $x, int $y): int{//pongo al final el valor que devuelve la funcion
    return $x + $y;
}
echo "<br>";
//   FUNCIONES PARA MANEJO DE VARIABLES   /////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
    isset() – Comprueba si una variable está definida y no es null.
    unset() – Destruye una variable.
    empty() – Comprueba si una variable está vacía.
    gettype() – Obtiene el tipo de una variable.
    settype() – Establece el tipo de una variable.
    is_array() – Comprueba si una variable es un array.
    is_string() – Comprueba si una variable es una cadena.
    is_numeric() – Comprueba si una variable es un número.
*/
//   FUNCIONES PARA MANEJO DE STRINGS   /////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
    strlen() – Obtiene la longitud de una cadena.
    strtoupper() – Convierte una cadena a mayúsculas.
    strtolower() – Convierte una cadena a minúsculas.
    substr() – Extrae una parte de una cadena.
    str_replace() – Reemplaza texto dentro de una cadena.
    strpos() – Encuentra la posición de la primera aparición de un texto.
    trim() – Elimina espacios al inicio y al final de una cadena.
    explode() – Divide una cadena en un array.
    implode() – Combina un array en una cadena.
*/
//   FUNCIONES MATEMÁTICAS   /////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
abs() – Devuelve el valor absoluto.
round() – Redondea un número.
ceil() – Redondea hacia arriba.
floor() – Redondea hacia abajo.
sqrt() – Calcula la raíz cuadrada.
pow() – Calcula la potencia de un número.
max() – Encuentra el valor máximo en un conjunto.
min() – Encuentra el valor mínimo en un conjunto.
rand() – Genera un número aleatorio.
*/ 
//   FUNCIONES PARA MANEJO DE ARRAYS   /////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
    count() – Cuenta los elementos de un array.
    print_r() - Muestra el contenido del array. 
    array_push() – Agrega uno o más elementos al final de un array.
    array_pop() – Elimina el último elemento de un array.
    array_shift() – Elimina el primer elemento de un array.
    array_unshift() – Agrega uno o más elementos al inicio de un array.
    in_array() – Comprueba si un valor existe en un array.
    array_merge() – Combina uno o más arrays.
    array_keys() – Obtiene todas las claves de un array.
    array_values() – Obtiene todos los valores de un array.
*/

//   ARRAY   /////////////////////////////////////////////////////////////////////////////////////////////////////////

$names = ["Hector","Juan","Pedro"];//Creo el array
$names[] = "Ana"; //Agrego elemento al array

echo $names[1]; 
echo "<br>";

//   ARRAYS ASOCIATIVOS  /////////////////////////////////////////////////////////////////////////////////////////////////////////

$beer = [
    "name" => "Erdinger",
    "alcohol" => "8.5",
    "country" => "Alemania"
];

$beer["alcohol"] = 9;

echo $beer["alcohol"];
echo "<br>";

//   ESTRUCTURA DE CONTROL FOREACH  /////////////////////////////////////////////////////////////////////////////////////////////////////////

foreach($beer as $v){// Recorre los valores de sus claves
    echo $v.";";
}
echo "<br>";
foreach($beer as $k => $v){// Recorre los valores de sus claves
    echo $k. " ". $v.";";//separo las varaibles con puntos
    echo "<br>";
}

//   ARRAYS MULTIDIMENSIONALES  /////////////////////////////////////////////////////////////////////////////////////////////////////////

$beers = [
    [
    "name" => "Erdinger",
    "alcohol" => "8.5",
    "country" => "Alemania"
    ],
    [
        "name" => "Erdinger 2",
        "alcohol" => "7",
        "country" => "Germany"
    ]
];

echo $beers[1]["name"];
echo "<br>";

foreach($beers as $x){// Recorre los valores de sus claves
    foreach($x as $value){
        echo $value."<br>";
    }
}
