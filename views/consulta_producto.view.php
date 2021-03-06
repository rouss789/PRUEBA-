<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Producto seleccionado</title>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
	
    <link rel="stylesheet" href="estilos/custom.css" type="text/css">
    <link rel="stylesheet" href="estilos/bootstrap.css" type="text/css">

    <?php include_once 'partials/headers.php'; ?>

</head>
<body>
    <div class="contenedor">
        <section class="producto">
            <br />
            <table cellpadding="10" cellspacing="10" class="db-table">
            <table class="table table-dark">
  <thead>
    <tr>
      <th scope="producto">Producto</th>
      <th scope="precio"> Precio</th>
      <th scope="imagen"> Muestra</th>>
    </tr>
  </thead>
  <tbody>
  <tr>
                    <td><?php echo '<strong>' . mb_strtoupper($resultados2['nombre'], 'UTF-8' ). '</strong>'; ?></td>
                    <td><?php echo $resultados2['precio']; ?></td>
                    <td><img src="<?php echo $resultados2['imagen'] ?>" width='180' height='180'></td>

                
                
    <tr>
  </tbody>
</table>

        </section>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-primary me-md-2"type="button" onclick="location.href='bienvenido.php'">VOLVER</button>
 

</div>

<?php include_once 'partials/footers.php'?>
</body>
</html>                