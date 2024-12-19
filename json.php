<?php

//   CONVERTIR OBJETO A JSON Y VICEVERSA   /////////////////////////////////////////////////////////////////////////////////////////////////////////


// Crear un array asociativo
$data = [
    "nombre" => "Juan",
    "edad" => 30,
    "profesion" => "Desarrollador"
];

// Convertir el array a JSON
$jsonData = json_encode($data);
echo "Datos en JSON: $jsonData <br>";

// Convertir el JSON de nuevo a un objeto PHP
$objData = json_decode($jsonData);
echo "Nombre: " . $objData->nombre . "<br>";
echo "Edad: " . $objData->edad . "<br>";
echo "Profesión: " . $objData->profesion . "<br>";

// Convertir el JSON de nuevo a un array PHP
$arrayData = json_decode($jsonData, true);
echo "Datos como array: ";
print_r($arrayData);

/*
    Datos en JSON: {"nombre":"Juan","edad":30,"profesion":"Desarrollador"}
    Nombre: Juan
    Edad: 30
    Profesión: Desarrollador
    Datos como array: Array ( [nombre] => Juan [edad] => 30 [profesion] => Desarrollador )

*/

//NAMESPACE ***