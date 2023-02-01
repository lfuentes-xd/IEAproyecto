
<?php
#ya funciona :) el error estaba en el input, me faltaba ponerle el id2 en el name.
        if (isset($_POST['id2'])) {
            echo "paso el if"; 
            include('db.php'); 
            $id = $_POST["id2"]; 
            #echo "el id que estas mandando es :".$id;

            $sentencia = "DELETE FROM producto WHERE Id ='$id'";  

            mysqli_query($conexion,$sentencia);
           
    
            mysqli_close($conexion); 

            header("Location: CRUD.php"); 
            die();
        }else{
            echo "hay problemas con el id "; 
        } 
       
?>
