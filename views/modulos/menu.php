<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Karina</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item"><a class="nav-link" aria-current="page" href="#porfolio">Portafolio</a></li>
            <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
        </ul>
        <ul class="navbar-nav">
            <?php
            if(isset($_SESSION["inicioSesion"])){
                echo "<a href='views/modulos/logout.php'><button type='button' class='btn btn-light'>Logout</button></a>";
            }else{
                echo "<button type='button' class='btn btn-light' data-bs-toggle='modal' data-bs-target='#modalLogin'>Login</button>";
            };
            ?>
        </ul>
        </div>
    </div>
    </nav>
</header>

<!-- Modal form login -->
<div class="modal fade" id="modalLogin" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">

        <form action="controllers/login.php" method="post">
          <div class="mb-3">
              <label for="usuario" class="form-label">Usuario</label>
              <input type="text" class="form-control" name="usuario" id="usuario" placeholder="admin" required>
          </div>
          
          <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="cac" required>
          </div>

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Entrar</button>
        </form>

      </div>
    </div>
  </div>
</div>