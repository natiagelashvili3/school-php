<?php
$servername  = "localhost";
        $username = "root";
        $password = "";
        $database_name = "school_post";

        try{

            $myDatabase = new PDO("mysql:host=localhost;dbname=".$database_name, $username, $password);

        }catch(Exeption $e){

            print_r($e->getMessage());

        }
?>