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
    <table border="1px">
        <thead>
            <th>Código</th>
            <th>nombres</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?PHP foreach($data["personas"] as $dato){
                echo "<tr>";
                echo "<td>".$dato["cod_person"]."</td>";
                echo "<td>".$dato["name"]."</td>";
                echo "<td>".$dato["Lname"]."</td>";
                echo "<td>".$dato["phone"]."</td>";
                echo "<td>".$dato["mail"]."</td>";
                echo"</tr>";

            }
            

            
            ?>
        </tbody>
    </table>
    <input type="button" value="Agregar">
    
</body>
</html>