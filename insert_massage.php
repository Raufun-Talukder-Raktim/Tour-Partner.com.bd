<?php
		session_start();
		$name = $_SESSION["username"];
					include 'nav.css';
			include("design.css");
?>

<html>
		<head>

		<title>
			Tour Partner.BD
		</title>

		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">










<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>








	</head>
<body style="background-color: #ffffff"  >
	<?php 
		$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "tour_signup"; 

		
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
			
		} 
		else 
		{ 
			echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
		} 
		
		
		
		mysqli_close($conn); 
		
	?>
	 <h5 style="text-align:center;" class="home1">Your Rasponce Have Been Recorted</h5>
	<div class="container">
		 <div class="button1">
		 <h2 style="text-align:center;" class="home1">Go back to Enter Another Message</h2>
			 <a href="contact_us.php">
			 <img src="contactus1.png" alt="Snow" style=" display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;">
	
		 </a>
		 </div>
		 </div>
		 <div class="container">
		 <div class="button1">
		 <h2 style="text-align:center;" class="home1">Go back to Homepage</h2>
			 <a href="splash_screen.php">
			 <img src="homepage.png" alt="Snow" style=" display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;">
	
		 </a>
		 </div>
		 </div>
	

</body>
</html>