<?php

if (isset($_POST['buscar']) ) {
        include('db.php');
        $id = $_POST['buscar'];  
        echo "el dato enviado por post es: ".$id; 

        $sentencia = "SELECT * FROM producto WHERE ID= '$id'";


        mysqli_query($conexion,$sentencia);
        
        mysqli_close($conexion); 

        

    }else{
        echo "no se recibio algun dato"; 
    }
?>