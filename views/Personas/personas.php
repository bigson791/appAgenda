<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"];?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="container">
    <h2><?php echo $data["titulo"];?></h2>
    <br>
    <table border="1px" class="table table-striped table-hover">
        <thead>
            <th>Código</th>
            <th>nombres</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <?PHP foreach($data["personas"] as $dato){
                echo "<tr>";
                echo "<td>".$dato["cod_person"]."</td>";
                echo "<td>".$dato["name"]."</td>";
                echo "<td>".$dato["Lname"]."</td>";
                echo "<td>".$dato["phone"]."</td>";
                echo "<td>".$dato["mail"]."</td>";
                echo "<td><a href='index.php?c=personas&a=modificar&id=".$dato["id"]."'>Modificar</a></td>";
                echo "<td><a href='index.php?c=personas&a=eliminar&id=".$dato["id"]."'>Eliminar</a></td>";
                echo"</tr>";

            }
            

            
            ?>
        </tbody>
    </table>
   <a href="index.php?c=personas&a=nuevo">Agregar nuevo</a>

    </div>

        
</body>
</html>