<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b2bf9bac46.js" crossorigin="anonymous"></script>
    <title><?php echo $data["titulo"]; ?></title>
</head>
<body>
    <br>
    <div class="container">
    <div class="row">
    <div class="col">
    <h2><?php echo $data["titulo"];?></h2>
    </div>
    <div class="col">

    </div>
    <div class="col">
    <a href="index.php"><h3 class="right"><i class="fas fa-home-lg"></i>Inicio</h3></a>
    </div>
  </div>
    <!--<h2><?php echo $data["titulo"];?></h2> -->
    <br>
    <p>
        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=personas&a=guardar" autocomplete="off"><br>
        <div class="mb-3">
            <label for="cod_person" class="form-label"> Código:</label>
            <input type="number" id="cod_person" name="cod_person" class="form-control" required pattern="[A-Za-z ]*"><br>
        </div>    
        <div class="mb-3">
        <label for="name" class="form-label"> Nombres:</label>
        <input type="text" id="name" name="name" class="form-control" required pattern="[A-Za-z ]*"><br>
        </div>
        <div class="mb-3">
        <label for="lname" class="form-label"> Apellidos:</label>
        <input type="text" id="lname" class="form-control" name="lname" required><br>
        </div>
        <div class="mb-3">
        <label for="phone" class="form-label"> Télefono:</label>
        <input type="number" id="phone" name="phone" class="form-control" required><br>
        </div>
        <div class="mb-3">
        <label for="mail" class="form-label"> Email:</label>
        <input type="email" id="mail" name="mail" class="form-control" required><br>
        </div>
            <button class="btn btn-primary btn-lg" id="guardar" name="guardar" type="submit">Guardar</button>

        </form>
    </p>
    </div>
</body>
</html>