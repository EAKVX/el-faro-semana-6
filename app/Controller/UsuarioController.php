<?php
require_once __DIR__ . '/../Model/Usuario.php';

class UsuarioController{
    public function registrar(){
        //Verificamos que el método de la solicitud sea POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Recibimos los datos del formulario
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $fechaRegistro = date('Y-m-d H:i:s');

            //Instanciamos un nuevo usuario con los datos recibidos
            $nuevoUsuario = new Usuario(rand(1, 1000), $nombre, $email, $password, $fechaRegistro);

            // Simulamos el éxito de la transacción enviando una alerta de Bulma
            echo "<div class='notification is-success has-text-centered mt-4 container'>";
            echo "¡Éxito! El usuario <strong>" . $nuevoUsuario->getNombre() . "</strong> ha sido registrado correctamente en el sistema.";
            echo "</div>";
        }
    }
}   