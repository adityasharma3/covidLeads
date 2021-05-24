<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "covidleads";

    $con = mysqli_connect($host , $username , $password , $database);

    if (!($con)) {
        die("database not connected! due to". mysqli_connect_error());
    }

?>