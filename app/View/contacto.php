<section class="container mt-5">
    <h2 class="title">Contacto</h2>
    <h3 class="subtitle">Envíanos un mensaje</h3>

    <form class="box" action="index.php?action=contacto" method="POST" style="max-width: 500px; margin: 0 auto;">
        
        <div class="field">
            <label class="label">Nombre</label>
            <div class="control">
                <input class="input" type="text" name="nombre" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Correo</label>
            <div class="control">
                <input class="input" type="email" name="email" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Mensaje</label>
            <div class="control">
                <textarea class="textarea" name="mensaje" required></textarea>
            </div>
        </div>

        <div class="control">
            <button class="button is-link is-fullwidth" type="submit">Enviar</button>
        </div>

    </form>
</section>