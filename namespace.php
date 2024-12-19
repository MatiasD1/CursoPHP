<?php

require "Utils\Operations.php";

use Utils\Operations;//El alias hace que se pueda usar directamente Operations en lugar de Utils\Operations.
$op = new Operations();//Se crea una instancia de Operations
echo $op->add(2,3);//Se llama al método add, sumando 2 y 3, y se imprime el resultado.

/*
- Modularidad: Las clases están organizadas en namespaces y archivos separados.
- Evitar conflictos: Si existieran múltiples clases con el nombre Operations, el namespace las diferencia.
- Reusabilidad: El archivo Utils/Operations.php puede ser usado en otros proyectos sin modificaciones.
*/