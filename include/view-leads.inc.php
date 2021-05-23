<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
  $link = mysqli_connect("localhost", "root", "", "covidleads");
  
  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  
  // Attempt select query execution
  $sql = "SELECT `name`, `city`, `phone`, `details` FROM `covidleads`.`leads` WHERE 1";

  if($result = mysqli_query($link, $sql)){
      if(mysqli_num_rows($result) > 0){
          // echo "<table>";
          //     echo "<tr>";
          //         echo "<th>id</th>";
          //         echo "<th>first_name</th>";
          //         echo "<th>last_name</th>";
          //         echo "<th>email</th>";
          //     echo "</tr>";
          // while($row = mysqli_fetch_array($result)){
          //     echo "<tr>";
          //         echo "<td>" . $row['name'] . "</td>";
          //         echo "<td>" . $row['city'] . "</td>";
          //         echo "<td>" . $row['phone'] . "</td>";
          //         echo "<td>" . $row['details'] . "</td>";
          //     echo "</tr>";
          // }
          // echo "</table>";

          $output = 
          "<table class = 'output-table'>
            <tr>
              <th>Name</th>
              <th>City</th>
              <th>Phone</th>
              <th>Details</th>
            </tr>
          </table>";

          while($row = mysqli_fetch_array($result)){
            $output .= 
            "<tr>
              <td>" . $row['name'] . "</td>
              <td>" . $row['city'] . "</td>
              <td>" . $row['phone'] . "</td>
              <td>" . $row['details'] . "</td>
            </tr>";
          }
          
          $output .= "</table>";

          $dataFound = true;
          // Free result set

          mysqli_free_result($result);
      } else{
          echo "No records matching your query were found.";
      }
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
  
  // Close connection
  // mysqli_close($link);

?>