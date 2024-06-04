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
				<a  href="about.php">About</a>
				<a href="tour_package.php">Tour Package</a>
				<a href="privacy_policy.php">Privacy Policy</a>
				<a href="terms.php">Terms of Use</a>
				<a href="contact_us.php">Contact Us</a>
				<a class="topright" href="location.php">Location Information</a>
			</div>
			<section class="breadcrumb_area">
				<div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
				</div>
				<div class="container">
					<div class="page-cover text-center">
						<h2 class="page-cover-tittle">Confirm Your Package</h2>
					</div>
				</div>
			</section>
<?php
// Echo session variables that were set on previous page
$pid=0;
$camount=0;
$pid =  $_SESSION["p_id"];
$pamount =  $_SESSION["amount"];
$name = $_SESSION["name"];
$pname =  $_SESSION["pname"];		
	?>
	
	

	
	
			<div class="container" style="background-color: #FFFFFF">
				<div class="row" >
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
				$sql = "SELECT * FROM cart where user_name = '$name' order by Id desc "; 
				$result = mysqli_query($conn, $sql); 
		echo "<table table-striped>";?>
 <table class="table table-striped">	
<?php 
		echo "<tr>";

		
		
		echo "
		<th>Serial_number</th>
		<th>Package_Id</th>
			<th>Package_Name</th>
			
			<th>Package_Price</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // output data of each row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				 echo "<tr>"; 
				 echo "<td>" . $row['Id'] . "</td>"; 
				 echo "<td>" . $row['package_id'] . "</td>";
				echo "<td>" . $row['package_name'] . "</td>";
				echo "<td>" . $row['amount'] . "</td>";
				
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
					</table>
			
	
</div>	
</div>




</body>
</html>