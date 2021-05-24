<?php
    include 'database.details.php';

    $dataSentSuceesfully;

    if (isset($_POST['name'])) {
        
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