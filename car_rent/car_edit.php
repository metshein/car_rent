<?php include("config.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autorent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  </head>
  <body>
<!-- menüü -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary  border-bottom">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Autorent ADMIN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Avaleht</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Autod</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hinnad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontakt</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-user"></i>Logi välja</button>
      </form>
    </div>
  </div>
</nav>
<!-- /menüü -->

<!-- <a class="btn btn-dark" href="edit_car.php?id=<?php echo $rida[0]; ?>">Muuda</a> -->

 <?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"];

    $paring = "SELECT * FROM cars WHERE id=".$id."";
    $valjund = mysqli_query($yhendus, $paring);
    $rida = mysqli_fetch_row($valjund);
    var_dump($rida);
} else {
    header("Location:index.php");
}


// $paring = "INSERT INTO cars (mark, model, engine, fuel, price, image, year, transmission, seats, description, status) 
// VALUES ('".$mark."', 'sdf', 'dfg', 'sdfg', '200', 'sdgf', '2000', 'dsfg', '5', 'zdfgb', 'vaba')";



  
 ?>
<form action="car_edit.php" method="get">
    Mark <input type="text" name="mark" value="<?php echo $rida[1]; ?>"><br>
    <input type="submit" value="Salvesta muudatused">
    <a href="admin.php" class="btn btn-danger">Tagasi</a>

</form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>