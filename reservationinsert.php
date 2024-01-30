<!DOCTYPEkiama🏩 html>
<html>

<head>
	<title>reservation form</title>
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
		$full_names = $_REQUEST['full_names'];
		$id_number = $_REQUEST['id_number'];
		$telephone = $_REQUEST['telephone'];
		$email = $_REQUEST['email'];
		$guests_number = $_REQUEST['guests_number'];
		$room_type = $_REQUEST['room_type'];
		$checkin_date = $_REQUEST['checkin_date'];
		$checkout_date = $_REQUEST['checkout_date'];
		$special_requests= $_REQUEST['special_requests'];
		$deposit_method=$_REQUEST['deposit_method'];

		// Performing insert query execution
		// here our table name is turkeyfeeds
		$sql = "INSERT INTO reservation VALUES ('$full_names','$id_number','$telephone','$email ','$guests_number',
			'$room_type','$checkin_date','$checkout_date','$special_requests','$deposit_method')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>reservation was successfull."
				. " please pay the resrvation fee within one hour to secure your reservation."
				. " </h3>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
			<a href=comfortprofile.html><button>HOME</button></a>
	
</body>

</html>
