<!DOCTYPEJS html>
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
		$service_type = $_REQUEST['service_type'];
		$estimated_guests = $_REQUEST['estimated_guests'];
		$venue = $_REQUEST['venue'];
		$occassion_date = $_REQUEST['occassion_date'];
		$special_requests= $_REQUEST['special_requests'];
		$deposit_method=$_REQUEST['deposit_method'];

		// Performing insert query execution
		// here our table name is turkeyfeeds
		$sql = "INSERT INTO special_services VALUES ('$full_names','$id_number','$telephone','$email ','$service_type',
			'$estimated_guests','$venue','$occassion_date','$special_requests','$deposit_method')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>reservation was successfull."
				. " please pay the resrvation fee within one hour to secure your reservation."
				. "You will be contacted by our agent in less than 24 hours. </h3>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
			<a href=comfortprofile.html><button> MAIN MENU</button></a>
	
</body>

</html>
