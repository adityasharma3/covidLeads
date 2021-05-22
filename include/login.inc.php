<?php

    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "covidLeads";

    $connection = mysqli_connect($dbServerName , $dbUserName , $dbPassword , $dbName);

    if (!$connection) {
        die("connection to this database failed due to".mysqli_connect_error());
    }
    echo "sucess! db connected to php";

    $sql = "INSERT INTO `login`(`email`, `password`) VALUES ('[value-1]','[value-2]')";

?>