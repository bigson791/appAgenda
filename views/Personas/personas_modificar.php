<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php echo $data["Titulo"]?></title>
</head>
<body>
    <br>
    <div class="container">
        <h2><?php echo $data["titulo"];?></h2>
        <br>
        <p>
            <form id="nuevo" name="nuevo" method="POST" action="index.php?c=personas&a=actualizar" autocomplete="off"><br>
                <input type="hidden" id="id" name="id" value="<?php echo $data["id"] ?>">
                Código: <input type="number" id="cod_person" name="cod_person" required pattern="[A-Za-z ]*" value="<?php echo $data ["personas"]["cod_person"] ?>"><br>
                Nombres: <input type="text" id="name" name="name" required pattern="[A-Za-z ]*" value="<?php echo $data ["personas"]["name"] ?>"><br>
                Apellidos: <input type="text" id="lname" name="lname" required value="<?php echo $data ["personas"]["Lname"] ?>"><br>
                Télefono: <input type="number" id="phone" name="phone" required value="<?php echo $data ["personas"]["phone"] ?>"><br>
                Email: <input type="email" id="mail" name="mail" required value="<?php echo $data ["personas"]["mail"] ?>"><br>
                <button id="guardar" name="guardar" type="submit">Guardar</button>

            </form>
        </p>
    </div>
</body>
</html>