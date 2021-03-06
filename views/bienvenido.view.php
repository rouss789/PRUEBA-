<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Bienvenidos</title>
  </head>
  <body>
<!-- inici menu-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/log_tienda.jpg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nosotros </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categoria de Productos 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Limpieza</a></li>
            <li><a class="dropdown-item" href="#">Comestible</a></li>
            <li><a class="dropdown-item" href="#">Personal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Ver todos</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!---fin menu-->
<div class="contenedor">
        <h1>Bienvenido </h1>
    </div>
    <div class="contenedor">
        <section class="productos">
            <br />
            <table cellpadding="10" cellspacing="10" class="db-table">

                <?php foreach ($resultados as $resultado): ?>
                    <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="Id_producto">Clave</th>
      <th scope="nombee">Producto</th>
      <th scope="categoria">muestra </th>
    </tr>
  </thead>
  <tr>
                        <td><?php echo '<a class="uam" href=consulta_producto.php?Id_producto=' . $resultado['Id_producto']; '>' ?> </td>
                        <td><?php echo '<strong>' . mb_strtoupper($resultado['nombre'], 'UTF-8' ) ?></td>
                        <td><img src="<?php echo $resultado['imagen'] ?>" width='85' height='85'></td>
                    </tr>


  <tbody>
</table>


                    
                <?php endforeach; ?>
		    </table>
            <br />
        </section>
    </div>

    
    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary me-md-2" type="button" onclick="location.href='index.php'">INICIAR SECCION </button>
</div>
<?php include_once 'partials/footers.php'?>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
