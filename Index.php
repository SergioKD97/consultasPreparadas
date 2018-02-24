<?php
        require './connect_db.php';
        
        
        $id= $_GET["id"];
        $nombre= $_GET["name"];
        $correo= $_GET["mail"];
        $pass= $_GET["pass"];
        
        $sql="insert into usuarios(id, nombre, correo, password) VALUES (?,?,?,?)";
        
        //OBJETO STMT
        $stmt= mysqli_prepare($mysqli, $sql);
        
        //BOOLEAN,se juntan el stmt el tipo de dato de la variable y la variable
        $resultado= mysqli_stmt_bind_param($stmt , 'isss', $id,$nombre,$correo,$pass);
        
        //BOOLEAN,ejecutar la consulta stmt donde esta la consulta
        $execute= mysqli_stmt_execute($stmt);
        
        if($execute == false){
            echo 'Error al ejecutar consulta';
        }else{
        
        //BOOLEAN,necesita el objeto stmt y tantas variables como columnas de la tabla--NO NECESARIO EN INSERT
        /*
        $variables = mysqli_stmt_bind_result($stmt, $id, $nombre, $correo, $password);
        */
        
        //lee los resultados del stmt---NO NECESARIO EN INSERT
        /*
        echo 'Articulos encontrados<br><br>';
        while(mysqli_stmt_fetch($stmt)){
        //    echo $id . " " . $nombre . " " . $correo . " " . $password . "<br>";
        //}
        */
       echo 'Agregado un nuevo Registro';
            
            
            
            
        mysqli_stmt_close($stmt);    
        }
        
?>