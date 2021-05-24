<?php

  include 'database.details.php';

  $link = mysqli_connect($host , $username , $password , $database);
  
  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  
  // Attempt select query execution
  $sql = "SELECT `name`, `city`, `phone`, `details` FROM `covidleads`.`leads` WHERE 1";

  if($result = mysqli_query($link, $sql)){
      if(mysqli_num_rows($result) > 0){
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
            "<table>
            <tr>
              <td>" . $row['name'] . "</td>
              <td>" . $row['city'] . "</td>
              <td>" . $row['phone'] . "</td>
              <td>" . $row['details'] . "</td>
            </tr>
            </table>";
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
