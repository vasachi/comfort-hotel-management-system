<!-- PHPJS code to establish connection with the localxamppserver -->
<?php

// Username is Admin1
$user = 'Admin1';
$password = 'shivachi';

// Database name is comfort hotel
$database = 'comfort hotel';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
$key=$_REQUEST['key'];
// SQL query to select data from database
$sql = " SELECT * FROM reservation where id_number='$key' ORDER BY checkin_date  DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPEJS html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>comprehensive report on hotel reservaton</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: black;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans',
			'Gill Sans', 'Gill Sans', 'Gill Sans';
		}

		td {
			background-color:yellow;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
		}
            @media print {
               #noprint {
                  display: none;
               }
		}
	</style>

</head>

<body>
	<section>
		<hr color="orange" width=100%>
		<h1>COMFORT HOTEL 🏩 </h1>
		<hr color="orange" width=100%>
		<h1>HOTEL 🏩  RESERVATIONS</h1>
		
		<!-- TABLE CONSTRUCTION -->
	
	
	
		<table>
			<tr>
				<th>FULL NAMES</th>
				<th>ID NUMBER</th>
				<th>TELEPHONE NUMBER</th>
				<th>E-MAIL ADDRESS</th>
				<th>NUMBER OF GUESTS</th>
				<th>ROOM TYPE</th>
				<th>CHECK IN DATE</th>
				<th>CHECK OUT DATE</th>
				<th>SPECIAL REQUESTS</th>
				<th>DEPOSIT PAYMENT METHOD</th>
	
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tbody id="turkeyfeeds">
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['full_names'];?></td>
				<td><?php echo $rows['id_number'];?></td>
				<td><?php echo $rows['telephone'];?></td>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['guests_number'];?></td>
				<td><?php echo $rows['room_type'];?></td>
				<td><?php echo $rows['checkin_date'];?></td>
				<td><?php echo $rows['checkout_date'];?></td>
				<td><?php echo $rows['special_requests'];?></td>
				<td><?php echo $rows['deposit_method'];?></td>

			</tr>
			<?php
				}
			?>
		</table>

   <a href=comfortprofile.html><button id = "noprint" >HOME</button></a>
   <a href=database landing.html><button id = "noprint">SYSTEM MAIN MENU</button></a>
   <input type="button" id = "noprint" value="PRINT" onclick="window.print();return false;" />

		
	</section>
</body>

</html>
