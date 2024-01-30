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

// SQL query to select data from database

$sql = " SELECT * FROM special_services ORDER BY occassion_date  DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPEJS html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>THE JS HOTEL RESERVATIONS </title>
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
			background-color:brown;
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
		{
             @media print {
      #printButton {
        display: none;
               }
		}
	</style>
<script>
function logout() {
    
    window.location.href = 'comforthotelprofile.php'; 
    
    // prevent the user from going back to the previous page
    window.history.pushState(null, null, window.location.href='login3.php');
    window.addEventListener('popstate', function logout() {
        window.history.pushState(null, null, window.location.href='login3.php');
    });
}
</script>
</head>

<body>
	<section>
		<h1>THE JS FARM HOTEL </h1>
		<h1>HOTEL SPECIAL SERVICES </h1>
		<!-- TABLE CONSTRUCTION -->
	
	
	
		<table>
			<tr>
				<th>FULL NAME</th>
				<th>ID NUMBER</th>
				<th>TELEPHONE</th>
				<th>E-MAIL ADDRESS</th>
				<th>SERVICE TYPE</th>
				<th>ESTIMATED NUMBER OF GUESTS</th>
				<th>LOCATION/VENUE</th>
				<th>OCCASSION DATE</th>
				<th>SPECIAL REQUESTS</th>
				<th>DEPOSIT PAYMENT METHOD</th>
	
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tbody id="hotel reservation">
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['full_names'];?></td>
				<td><?php echo $rows['id_number'];?></td>
				<td><?php echo $rows['telephone'];?></td>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['service_type'];?></td>
				<td><?php echo $rows['estimated_guests'];?></td>
				<td><?php echo $rows['venue'];?></td>
				<td><?php echo $rows['occassion_date'];?></td>
				<td><?php echo $rows['special_requests'];?></td>
				<td><?php echo $rows['deposit_method'];?></td>

			</tr>
			<?php
				}
			?>
		</table>

   <a href=database landing.html><button id="printButton" >DATABASE MAIN MENU</button></a>
   <a href=login.html><button id="printButton">SYSTEM MAIN MENU</button></a>
   <button id="printButton"  onclick="window.print();return false;">PRINT</button>
   <input type="button" id="printButton name="log"  value="LOGOUT" onclick="logout()">
		
	</section>
</body>

</html>
