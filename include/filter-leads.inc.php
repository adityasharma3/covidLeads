<?php
	include 'database.details.php';
	$specificDataFound = false;
	
	if (isset($_POST['city-input'])) {
		$city_input = $_POST['city-input'];

		$sql = "SELECT * FROM `covidleads`.`leads` WHERE city = '$city_input'";

		if ($result = mysqli_query($con, $sql)) {
			if (mysqli_num_rows($result) > 0) {
				$specificOutput =
					"<table class = 'output-table'>
					<tr>
						<th>Name</th>
						<th>City</th>
						<th>Phone</th>
						<th>Details</th>
					</tr>
					</table>";

				while ($row = mysqli_fetch_array($result)) {
					$specificOutput .=
						"<table>
					<tr>
						<td>" . $row['name'] . "</td>
						<td>" . $row['city'] . "</td>
						<td>" . $row['phone'] . "</td>
						<td>" . $row['details'] . "</td>
					</tr>
					</table>";
				}
			}
			$specificDataFound = true;
			mysqli_free_result($result);
		}
	} 
	
	if (isset($_POST['phone-input'])) {
		$phone_input = $_POST['phone-input'];

		$sql = "SELECT * FROM `covidleads`.`leads` WHERE phone = '$phone_input'";

		if ($result = mysqli_query($con, $sql)) {
			if (mysqli_num_rows($result) > 0) {
				$specificOutput =
					"<table class = 'output-table'>
					<tr>
					<th>Name</th>
					<th>City</th>
					<th>Phone</th>
					<th>Details</th>
					</tr>
				</table>";

				while ($row = mysqli_fetch_array($result)) {
					$specificOutput .=
					"<table>
						<tr>
							<td>" . $row['name'] . "</td>
							<td>" . $row['city'] . "</td>
							<td>" . $row['phone'] . "</td>
							<td>" . $row['details'] . "</td>
						</tr>
					</table>";
				}
			}
			$specificDataFound = true;
			mysqli_free_result($result);
		}
	}  
	
	if (isset($_POST['desc-input'])) {
		$desc_input = $_POST['desc-input'];

		$sql = "SELECT * FROM `covileads`.`leads` WHERE details LIKE '%$desc_input%'";

		if ($result = mysqli_query($con, $sql)) {
			if (mysqli_num_rows($result) > 0) {
				$specificOutput =
					"<table class = 'output-table'>
					<tr>
					<th>Name</th>
					<th>City</th>
					<th>Phone</th>
					<th>Details</th>
					</tr>
				</table>";

				while ($row = mysqli_fetch_array($result)) {
					$specificOutput .=
						"<table>
					<tr>
					<td>" . $row['name'] . "</td>
					<td>" . $row['city'] . "</td>
					<td>" . $row['phone'] . "</td>
					<td>" . $row['details'] . "</td>
					</tr>
					</table>";
				}
			}
			$specificDataFound = true;
			mysqli_free_result($result);
		}
	}
?>