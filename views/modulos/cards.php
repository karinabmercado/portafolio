<div class="album py-4 bg-light">
  <div class="container tarjetas">

    <div class="row">
      <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center">
          <h1 class="fw-light" id="porfolio">Mi Portafolio</h1>
          <?php
            if(isset($_SESSION["inicioSesion"])){
              echo "<button type='button' class='btn btn-sm btn-outline-secondary btnNewCard' data-bs-toggle='modal' data-bs-target='#modalNuevaTarjeta'><i class='fas fa-plus'></i></button>";
            };
          ?>
        </div>				
      </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach($proyectos as $proyecto){ ?>
          <div class="col">
            <div class="card shadow-sm">

              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="views/pictures/<?php echo $proyecto['imagen'];?>" alt="card view">

              <div class="card-body">
                <h5 class="card-title text-dark"><?php echo $proyecto['nombre'];?></h5>
                <p class="card-text"><?php echo $proyecto['descripcion'];?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="<?php echo $proyecto['url']; ?>" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Ver</button></a>

                    <?php
                      if(isset($_SESSION["inicioSesion"])){
                        echo "<button type='button' class='btn btn-sm btn-outline-secondary btnEditCard' idCard='".$proyecto['id']."' data-bs-toggle='modal' data-bs-target='#modalEditarTarjeta'>Editar</button>";
                        echo "<a href='controllers/eliminar.php?id=".$proyecto['id']."' name='eliminarProyecto' id='eliminarProyecto'><button type='button' class='btn btn-sm btn-outline-danger ml-auto btnDeleteCard'><i class='fas fa-trash-alt'></i></button></a>";
                      };
                    ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
    </div>
  </div>
</div>

<!-- Modal nueva tarjeta -->
<div class="modal fade" id="modalNuevaTarjeta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Agregar Proyecto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">

        <form action="controllers/nuevo.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
              <label for="nombreProyecto" class="form-label">Nombre del Proyecto</label>
              <input type="text" class="form-control" name="nombreProyecto">
          </div>
          
          <div class="mb-3">
              <label for="descripcionProyecto" class="form-label">Descripción</label>
              <textarea class="form-control" name="descripcionProyecto" rows="3"></textarea>
          </div>

          <div class="mb-3">
              <label for="imagenProyecto" class="form-label">Imagen</label>
              <input type="file" class="form-control" name="imagenProyecto">
              <div class="form-text">Insertar imagen en formato JPG</div>
          </div>

          <div class="mb-3">
              <label for="urlProyecto" class="form-label">URL del Proyecto</label>
              <input type="text" class="form-control" name="urlProyecto">
          </div>

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>

        </form>

      </div>
    </div>
  </div>
</div>

<!-- Modal editar tarjeta -->
<div class="modal fade" id="modalEditarTarjeta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Editar Proyecto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="controllers/guardar_edicion.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
              <label for="editarNombreProyecto" class="form-label">Nombre del Proyecto</label>
              <input type="text" class="form-control" name="editarNombreProyecto" id="editarNombreProyecto">
          </div>
          
          <div class="mb-3">
              <label for="editarDescripcionProyecto" class="form-label">Descripción</label>
              <textarea class="form-control" name="editarDescripcionProyecto" id="editarDescripcionProyecto" rows="3"></textarea>
          </div>

           <div class="mb-3">
              <label for="editarImagenProyecto" class="form-label">Imagen</label>
              <input type="text" class="form-control mb-1" name="editarNombreImagenProyecto" id="editarNombreImagenProyecto" readonly>
              <input type="file" class="form-control" name="editarImagenProyecto" id="editarImagenProyecto">
              <div class="form-text">Insertar imagen en formato JPG</div>
          </div>

          <div class="mb-3">
              <label for="editarUrlProyecto" class="form-label">URL del Proyecto</label>
              <input type="text" class="form-control" name="editarUrlProyecto" id="editarUrlProyecto">
          </div>

          <input type="hidden" name="idCard" id="idCard" required>

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

      </div>
    </div>
  </div>
</div>