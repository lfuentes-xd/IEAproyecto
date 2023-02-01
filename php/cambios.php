<?php
    
    
    if (isset($_POST['valor1']) ) {
        include('db.php');


        $id = $_POST['valor1'];  
        $Nombre = $_POST['valor2'];
        $Precio = $_POST['valor3'];
        $Desc = $_POST['valor4'];
        $Ex = $_POST['valor5'];
        #echo  'el id que estas mandando es :'.$id."\n";
        #echo  'el nombre que se manda es: '.$Nombre."\n";
        #echo  "el precio que se manda es: ".$Precio."\n"; 
        #echo  "la descripripcion que se manda es: ".$Desc."\n";
        #echo  "las existencias que se mandan son de: ".$Ex."\n";

        $sentencia = "UPDATE producto set nombre='$Nombre', descripcion='$Desc', precio='$Precio', disponible='$Ex' WHERE Id='$id'";

        mysqli_query($conexion,$sentencia);
           
    
        mysqli_close($conexion); 

        header("Location: CRUD.php"); 
            die();
    }else{
        echo "no entro. hay problemas. de nuevo ";  
    }

?>