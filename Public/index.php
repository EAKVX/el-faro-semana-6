<?php

require_once __DIR__ . '/../app/Controller/UsuarioController.php';

// Cargamos el Header (siempre visible)
require_once __DIR__ . '/../app/View/Layout/header.php';

// --- SISTEMA DE ENRUTAMIENTO BÁSICO ---
$action = $_GET['action'] ?? 'inicio';

switch ($action) {
    case 'registrar':
        $usuarioController = new UsuarioController();
        $usuarioController->registrar();
        require_once '../app/View/registro.php';
        break;
        
    case 'nuevo_articulo':
        // Carga la vista aislada del formulario de artículos
        require_once '../app/View/nuevo_articulo.php';
        break;

    // Contacto
    case 'contacto':
        require_once '../app/View/contacto.php';
        break;
        
    default:
        // Carga solo la información de noticias
        require_once '../app/View/inicio.php';
        break;
}

// Cargamos el Footer (siempre visible)
require_once '../app/View/Layout/footer.php';
?>