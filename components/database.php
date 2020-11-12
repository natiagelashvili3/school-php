<?php
        $servername  = "localhost";
        $username = "root";
        $password = "";
        $database_name = "school-project";

    try{

        $myDatabase = new PDO("mysql:host=localhost;dbname=school-project", $username, $password);

    }catch(Exeption $e){

        print_r($e->getMessage());

    }
    
?>