<?php

    $dataSentSuceesfully;

    if (isset($_POST['name'])) {

        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "covidleads";

        $con = mysqli_connect($host , $username , $password , $database);

        if (!$con) {
            die ("Not able to connect to database due to". mysqli_connect_error());
        }

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $details = $_POST['details'];

    

        $sql = "INSERT INTO `covidleads`.`leads`(`name`, `city`, `phone`, `details`) VALUES ('$name','$city','$phone','$details')";
        
        if ($con->query($sql)) {
            $dataSentSuceesfully = true;
        }

        $con->close();
    } else {
        $dataSentSuceesfully = false;
    }

?>