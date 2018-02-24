<?php
        define("DB_HOST","localhost" );
        define("DB_USER", "root");
        define("DB_PASS", "");
        define("DB_DATABASE", "amazon1" );
        
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
        $codificacion = $mysqli->query("SET NAMES 'utf8'");
            if($mysqli->connect_errno > 0){
             die("Imposible conectarse con la base de datos [" . $mysqli->connect_error . "]");
            }
?>