<?php

  include 'database.details.php';

  // Attempt select query execution
  $sql = "SELECT `name`, `city`, `phone`, `details` FROM `covidleads`.`leads` WHERE 1";

  if ($result = mysqli_query($con, $sql)) {
    if (mysqli_num_rows($result) > 0) {
      $output =
        "<table class = 'output-table'>
              <tr>
                <th>Name</th>
                <th>City</th>
                <th>Phone</th>
                <th>Details</th>
              </tr>
            </table>";

      while ($row = mysqli_fetch_array($result)) {
        $output .=
          "<table>
              <tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['city'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['details'] . "</td>
              </tr>
            </table>";
      } 

      $dataFound = true;
      
      // Free result set
      mysqli_free_result($result);
    } else {
      echo "No records matching your query were found.";
    }
}