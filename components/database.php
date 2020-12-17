<?php
        $servername  = "localhost";
        $username = "admin";
        $password = "admin123";
        $database_name = "school-post";

    try{

        $myDatabase = new PDO("mysql:host=localhost;dbname=".$database_name, $username, $password);

    }catch(Exeption $e){

        print_r($e->getMessage());

    }
    
?>