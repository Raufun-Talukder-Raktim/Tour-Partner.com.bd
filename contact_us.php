
<?php
              session_start();
              $name = $_SESSION['username']
?>



<html>
		<head>

		<title>
			Tour Partner.BD
		</title>

		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<?php
			include 'nav.css';
			include("design.css");
		
		?>
		        <link rel="stylesheet" href="css/style.css">
		    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <link rel="stylesheet" href="css/main.css">


	</head>
	
	<body style="background-color: #FFFFFF" >

	<div class="top">
			<a href="Login.php">Admin Login</a>
			<a class="topright" href="logout.php">Logout</a>
			<a class="topright"><?php echo $name; ?></a>
		
			
		</div>

	
		<div style="background-color: #ffffff">
		
			<h1 style="text-align:center" >Welcome To TOURPARTNER.COM.BD</h1>
		
		<div class="topnav">
			<a  href="splash_screen.php">Home</a>
			<a href="about.php">About</a>
			<a href="tour_package.php">Tour Package</a>
			<a href="privacy_policy.php">Tour Destination</a>
			<a href="terms.php">Terms of Use</a>
			<a class="active" href="contact_us.php">Contact Us</a>
			<a class="topright" href="location.php">Location Information</a>
					<a href="cart.php">Cart</a>
		</div>
		<section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="topnav">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Contact Us</h2>
                  
                </div>
            </div>
        </section>
		


		<div id="googleMap" style="width:100%;height:400px;"></div>

			<script>
				function myMap() {
				var mapProp= {
				center:new google.maps.LatLng(51.508742,-0.120850),
				zoom:5,
						};
				var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
				}
			</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

		
				<div class="container" >
			    <link rel="stylesheet" href="css/main.css">
        <div class="row">
            <div class="col-md-6 image-container">

                <div class="heading">
                    Get in Touch
                </div>
                <div class="icon-contain">
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Mirbag Mor, Modubag<br />Dhaka</p>
                        </div>
                    </div>
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p><a href="tel:+8801703374073">+8801703374073</a></p>
                        </div>
                    </div>
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p><a href="raufuntalukderraktim@gmail.com">Admin@gmail.com</a></p>
                        </div>
                    </div>
                </div>
    
            </div>
            <div class="col-md-6 form-container">
                <div class="message">
                    SEND MESSAGE
                </div>
                <form action="insert_massage.php" method="POST">
				
                    <div class="field name-container">
                        
                    
                    
                    <div class="field">
                        <label for="textarea">Message<span class="required-mark">*</span></label>
                        <textarea id="textarea" rows="4" class="form-control textarea" name="message" placeholder="Enter your message here..." required></textarea>
                    </div>
					</div>
                    <div class="field">
                        <input href="contact_us.php" type="submit" class="button" value="Submit" />
                    </div>
			
                </form>
            </div>
        </div>
		 </div>
		 
		 
		 <div class="container" style="background-color: #FFFFFF">
				<div class="row" >
				
		<h4  style="background-color: #94daf7" > All Reply from the Admin</h4>
		 
		 <?php 


		$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "tour_signup"; 
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		// Check connection 
		if (!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 
		$sql = "SELECT * FROM contact where User_name = '$name' ";
		
		$result = mysqli_query($conn, $sql); 
		echo "<table table-striped>";?>
 <table class="table table-striped">	
<?php 
		echo "<tr>";

		
		
		echo "<th>User Name</th>
			<th>Your Message</th>
			<th>Admin Reply</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // output data of each row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				 echo "<tr>"; 
				 echo "<td>" . $row['User_name'] . "</td>"; 
				 echo "<td>" . $row['massage'] . "</td>";
				echo "<td>" . $row['reply'] . "</td>";
				
				 echo "</tr>"; 
			 } 
		} 
		else 
		{ 
			echo "0 results"; 
		} 
		echo "</table>"; 
		mysqli_close($conn); 
	?>
     </div>
     </div>
	      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

















</body>

</html>


	





