<?php 

    

    function Open(){
        $host = "localhost",
        $db_user = "radulov",
        $db_pass = "3n1gma86ir",
        $db = "test_db"

        $conn = new mysqli($host, $db_user, $db_pass, $db) or die("Error connecting to db \n". $conn -> error);

        return $conn;
    }

    function Close($conn){
        $conn -> close();
    }



?>