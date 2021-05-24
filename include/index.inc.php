<?php
    include 'database.details.php';

    $count_data = 0;
    // $latest_addition = "";
    $sql = "SELECT `name`, `city`, `phone`, `details` FROM `covidleads`.`leads` WHERE 1";

    if ($result = mysqli_query($con , $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $count_data++;
                // $latest_addition = $row['time'];
            }
        }
    }

?>