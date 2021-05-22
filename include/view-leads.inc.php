<?php

    $dataFound = false;

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "covidleads";

    $con = mysqli_connect($host , $username , $password , $database);

    if (!$con) {
        die ("Not able to connect to database due to". mysqli_connect_error());
    }

    $sql = "SELECT * FROM  `covidleads`.`leads` WHERE 1;";


    if($con->query($sql)) {
        $dataFound = true;
    }

    $con->close();

?>