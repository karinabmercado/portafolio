<div class="container py-5">

    <h1 class="fw-light" id="contacto">Contáctame</h1>

    <form action="controllers/mensaje.php" method="post">
        <div class="mb-3">
            <label for="nombreContacto" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombreContacto" id="nombreContacto" required>
            <div class="form-text">Se respetara la privacidad el nombre.</div>
        </div>
        <div class="mb-3">
            <label for="emailContacto" class="form-label">Email</label>
            <input type="email" class="form-control" name="emailContacto" id="emailContacto" required>
            <div class="form-text">No compartiré tu email con nadie.</div>
        </div>
        <div class="mb-3">
            <label for="asuntoContacto" class="form-label">Asunto</label>
            <input type="text" class="form-control" name="asuntoContacto" id="asuntoContacto" required>
        </div>
        <div class="mb-3">
            <label for="comentarioContacto" class="form-label">Comentario</label>
            <textarea class="form-control" name="comentarioContacto" id="comentarioContacto" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>