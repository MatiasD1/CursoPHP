<?php

//   TRAITS   /////////////////////////////////////////////////////////////////////////////////////////////////////////

trait Logger {
    public function log(string $mensaje): void {
        echo "Log: $mensaje<br>";
    }
}

trait Notificador {
    public function notificar(string $mensaje): void {
        echo "Notificación: $mensaje<br>";
    }
}

class Usuario {
    use Logger, Notificador; // Uso de múltiples traits

    public string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function mostrarUsuario(): void {
        $this->log("Mostrando información del usuario $this->nombre");//this->method indica que se está accediendo al método actual de la clase, sin importar que el metodo provenga de un trait
        echo "Usuario: $this->nombre<br>";
        $this->notificar("Se accedió al perfil del usuario $this->nombre");
    }
}

// Crear una instancia de Usuario
$usuario = new Usuario("Juan Pérez");
$usuario->mostrarUsuario();
