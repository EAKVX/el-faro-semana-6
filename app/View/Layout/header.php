<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Faro Chile</title>

    <link rel="icon" href="https://i.imgur.com/4Yw0lwd.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="CSS/style.css"> 
</head>

<body>

    <div class="notification is-warning has-text-centered mb-0 rounded-0">
        📰 Última hora: Nuevo rediseño del sitio El Faro
    </div>

    <section class="section pb-2 pt-4 has-background-white has-text-centered">
        <h1 class="title is-1 has-text-dark" style="margin-bottom: 1rem !important;">EL FARO</h1>
        <p class="subtitle is-5 has-text-grey" style="margin-bottom: 1rem !important;">Periódico Digital de Chile</p>
        <p id="fechaHora" class="has-text-grey-light is-size-6 mb-3"></p>
        <img src="https://i.imgur.com/C1mAhMQ.jpeg" style="max-width: 250px; border-radius: 8px; margin-top: 15px;" alt="Logo El Faro">
    </section>

    <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="index.php">Inicio</a>
                    <a class="navbar-item" href="index.php#deportes">Deportes</a>
                    <a class="navbar-item" href="index.php#negocios">Negocios</a>
                    <a class="navbar-item" href="index.php?action=contacto">Contacto</a>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary is-small" href="index.php?action=registrar" target="_blank">
                                <strong>Registrar Lector</strong>
                            </a>
                            <a class="button is-light is-small" href="index.php?action=nuevo_articulo" target="_blank">
                                Agregar Artículo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>