<?php
  ob_start();
  if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php if(isset($page_title)) echo $page_title; ?></title>

<!-- Bootstrap -->
  <!--<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/custom.css" type="text/css">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="./img/escudio.jpg">

  <div class="wrap3 display-4 text-center">

      <h1>Tecnológico Nacional de México</h1>
      <h2>Instituo Tecnológico de Tláhuac III</h2>
      
  </div>
  <container class="form-inline my-2 my-lg-0"> 
    <!--<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button> -->
    <!-- <img src="./img/coloquio_titulo1.png" /> -->
    <img src="./img/Logo-TecNM-2017.png">
  </container>
</nav>