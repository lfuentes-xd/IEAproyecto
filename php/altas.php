<?php
        include('db.php'); 
        $id = $_POST["id"]; 
        $nombre = $_POST["Nombre"];
        $precio = $_POST["Precio"]; 
        $Des = $_POST["Cantidad"];
        $Existencia = $_POST["Ex"];
        
        $sentencia=  "INSERT INTO  producto (Id,nombre,descripcion,precio,disponible) 
        values ('$id','$nombre','$Des','$precio','$Existencia')";

        mysqli_query($conexion,$sentencia);
       

        mysqli_close($conexion); 

        header("Location: CRUD.php");
        die();
    
?>
