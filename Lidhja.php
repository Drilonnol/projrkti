<?php
    $servername = "root";
    $username = "root@localhost";
    $password = "";
    $dbname = "wizzair";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Lidhja deshtoi: " . $conn->connect_error);
    }else{
        echo"Suksese";
    }

?>