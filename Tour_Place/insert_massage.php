<?php
		session_start();
		$name = $_SESSION["name"];
?>

<html>
<head>


</head>
<body>
	<?php 
		$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "NUMBERS"; 

		
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		// Check connection 
		if(!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		}
		
		$sql = "INSERT INTO contact (User_name, massage) VALUES ('$name', '$_POST[message]')  "; 

		if (mysqli_query($conn, $sql)) 
		{ 
			
			echo "Thank you for your massage, An admin will give you a reply as soon as possible";
			
			?> <form action="contact_us.php" >
				
                  
                    <div class="field">
                        <input  type="submit" class="button" value="Submit" />
                    </div>
			
                </form><?php
		} 
		else 
		{ 
			echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
		} 
		
		
		
		mysqli_close($conn); 
		
	?>
	

</body>
</html>