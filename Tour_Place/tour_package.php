<?php
		session_start();
		$name = $_SESSION["name"];
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
	
	<body style="background-color: #E0E0E0" >



		<div class="top">
			<a href="">Admin Login</a>
			<a class="topright" href="login.php"><?php echo $name; ?></a>
			<a class="topright" href="sign_in.php">SignIn</a>
			
		</div>
		<div style="background-color: #E0E0E0">
		<h1 color= "black" >Welcome to Tour Partner.BD</h1>
		<div class="topnav">
			<a  href="splash_screen.php">Home</a>
			<a href="about.php">About</a>
			<a class="active" href="tour_package.php">Tour Package</a>
			<a href="privacy_policy.php">Privacy Policy</a>
			<a href="terms.php">Terms of Use</a>
			<a href="contact_us.php">Contact Us</a>
			<a class="topright" href="location.php">Location Information</a>
		</div>
		<section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Tour Package List</h2>
                  
                </div>
            </div>
        </section>
		
		
		<div class="container">
		
				<div  style="background-color: #FFFFFF" class="row">
				<h3 class="tour_image" width= "100px" >Package List</h3>

		<?php
		
		$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "NUMBERS"; 
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		// Check connection 
		if (!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 
		$sql = "SELECT * FROM insert_image "; 
		$result = mysqli_query($conn, $sql); 


		if (mysqli_num_rows($result) > 0) 
		{ 
			 // output data of each row 
			 while($row = mysqli_fetch_assoc($result)) 
			 {  echo "<tr>";
			echo "<table align='left' >"; 
				?> 

		
				<?php
					echo "<tr>";	
				?>
				<img  src= "<?php echo  $row['image_for']; ?>"  width="30%"> 
				<?php
				
				
			
		
				 echo "<br>";
				  
				 echo "<tr>";
				echo "</br>"; 				
				echo "<th>Package_Id:</th>";
				echo "<td>" . $row['id'] . "</td>";
				
				echo "</tr>";
				echo "<tr>";
				echo "</br>"; 				
				echo "<th>Package_Name:</th>";
				echo "<td>" . $row['Package_Name'] . "</td>";
				
				echo "</tr>"; 	 
				echo "<tr>";
				echo "<th>Package_Location:</th>";
				echo "<td>" . $row['Package_Location'] . "</td>"; 
				echo "</tr>"; 
				echo "<tr>";
				echo "<th>Package_Price:</th>";
				echo "<td>" . $row['Package_Price'] . "</td>";
				echo "</tr>"; 
				echo "<tr>";
				echo "<th>Package_Fetures:</th>";
				echo "<td>" . $row['Package_Fetures'] . "</td>";
				echo "</tr>"; 
				echo "<tr>";
				echo "<th>Start From:</th>";
				echo "<td>" . $row['from_date'] . "</td>";
				echo "</tr>"; 
				echo "<tr>";
				echo "<th>End At:</th>";
				echo "<td>" . $row['to_date'] . "</td>";
				

				?>

				
						<form action="package_details.php" method="get">
		<tr align = "right">
		<td align = "left">
		<h5 style="color:red" >Enter The PackageId</h5> <input  type="number" name="package_id"  />
<br /> 
		<button type = "submit"  name = "Details" value = "Details">
				<a>Details</a></button>
	</form>
				
				
					<?php 	
					
				echo "</tr>"; 
				echo "</br>";
				
			
			 } 
			 echo  "<br>";
		} 
				
			  
		
		else 
		{ 
			echo "0 results"; 
		} 
		echo "</table>"; 
		mysqli_close($conn); 

	?>
			</div>	
			<?php 
		echo  "<br>";
	?>
	

		<tr align = "right">		
			<td align="left">
				
				<button style="background-color: #03fc49" type = "submit" name = "View More Packages" value = "View More Packages">
					<div ><a class="btn btn-default" href="tour_package.php" class="view">View More Packages</a></div>
				</button>
			
				
            </td>
			
			</tr>




</div>
		
				</div>
		</body>

</html>