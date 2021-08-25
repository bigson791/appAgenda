<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["Titulo"]?></title>
</head>
<body>
    <h2><?php echo $data["titulo"];?></h2>
    <br>
    <p>
        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=personas&a=guardar" autocomplete="off"><br>
            Código: <input type="number" id="cod_person" name="cod_person" required pattern="[A-Za-z ]*"><br>
            Nombres: <input type="text" id="name" name="name" required pattern="[A-Za-z ]*"><br>
            Apellidos: <input type="text" id="lname" name="lname" required><br>
            Télefono: <input type="number" id="phone" name="phone" required><br>
            Email: <input type="email" id="mail" name="mail" required><br>
            <button id="guardar" name="guardar" type="submit">Guardar</button>

        </form>
    </p>
</body>
</html>