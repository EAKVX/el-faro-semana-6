<section class="container mt-6">
    <div class="columns is-centered">
        <div class="column is-two-thirds-tablet is-half-desktop">
            <div class="box shadow">
                <h2 class="title has-text-centered">📰 Redactar Nuevo Artículo</h2>
                <hr>
                <form onsubmit="event.preventDefault(); alert('Articulo enviado al controlador (Simulación)'); window.close();">
                    <div class="field">
                        <label class="label">Título de la Noticia</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Ej: Avances tecnológicos en Chile" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Contenido / Descripción</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Escribe el cuerpo de la noticia aquí..." rows="8" required></textarea>
                        </div>
                    </div>

                    <div class="field is-grouped is-grouped-centered mt-5">
                        <div class="control">
                            <button class="button is-dark is-fullwidth" type="submit">Publicar Artículo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>