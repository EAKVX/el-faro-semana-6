<section class="container mt-5" id="registro">
    <h2 class="title">Registro de Lectores</h2>
    <h3 class="subtitle">Crea tu cuenta para acceder a contenido exclusivo</h3>

    <form class="box" action="index.php?action=registrar" method="POST" style="max-width: 500px; margin: 0 auto;">
        <div class="field">
            <label class="label">Nombre completo</label>
            <div class="control">
                <input class="input" type="text" name="nombre" placeholder="Ej: Juan Pérez" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Correo Electrónico</label>
            <div class="control">
                <input class="input" type="email" name="email" placeholder="correo@ejemplo.com" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Contraseña</label>
            <div class="control">
                <input class="input" type="password" name="password" placeholder="********" required>
            </div>
        </div>

        <div class="control">
            <button class="button is-link is-fullwidth" type="submit">Crear Cuenta</button>
        </div>
    </form>
</section>