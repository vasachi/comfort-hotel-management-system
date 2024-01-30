<!DOCTYPEkiama🏩 html>
<html>

<head>
	<title>reservation assignment form🏩</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => Admin1
		// password => shivachi
		// database name => comfort hotel
		$conn = mysqli_connect("localhost", "Admin1", "shivachi", "comfort hotel");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all  values from the form data(input)
		$id_number = $_REQUEST['id_number'];
		$telephone = $_REQUEST['telephone'];
		$room_number = $_REQUEST['room_number'];
		$checkin_date = $_REQUEST['checkin_date'];
		$checkout_date = $_REQUEST['checkout_date'];
		$status='BOOKED';

		// Performing insert query execution
		// here our table name is reservation and hotel rooms
		$sql = "UPDATE reservation SET room_number='$room_number',checkin_date ='$checkin_date',checkout_date='$checkout_date' WHERE id_number='$id_number' AND telephone='$telephone'"; 
		$sql="UPDATE hotel_rooms SET status='$status' WHERE room_number='$room_number' ";

		if(mysqli_query($conn, $sql)){
			echo "<h3>reservation successfull."
				. "Room reserved"
				. " </h3>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
			<a href='database landing.html'><button>HOME</button></a>
	
</body>

</html>
