



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




<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar">
   <a href="admin2.php">Insert and Delete</a>
  <a href="userlist.php">User List</a>
  <a href="message.php">Message</a>
  <a class="active" href="booking.php">Booking Status</a>
</div>

<div class="content">
<?php
$servername = "localhost"; 
				$username = "root"; 
				$password = "";
				$dbname = "tour_signup"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE cart SET status ='$_POST[status_v]' WHERE id='$_POST[Serial_number_v]' and status='Accepted' ";

if ($conn->query($sql) === TRUE) {

} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
<div class="container" style="background-color: #FFFFFF">
				<div class="row" >
				<a style="background-color: #94daf7" > Processing </br> Requird Accepteince </a>
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
				$sql = "SELECT * FROM cart where status='Processing'  "; 
				$result = mysqli_query($conn, $sql); 
		echo "<table table-striped>";?>
 <table class="table table-striped">	
<?php 
		echo "<tr>";

		
		
		echo "
			<th>Serial_number</th>
			<th>Package_Id</th>
			<th>Package_Name</th>
			<th>User Name</th>
			<th>Package_Price</th>
			<th>Status</th>"; 
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
				echo "<td>" . $row['user_name'] . "</td>";
				echo "<td>" . $row['amount'] . "</td>";
				echo "<td>" . $row['status'] . "</td>";
				
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
					
					

					
					
					<form action="booking.php" method="POST">
                   
                    <div class="field">
                        <label>Serial_number<span class="required-mark">*</span></label>
                        <input type="number"  name="Serial_number" value="" class="form-control" placeholder="Serial_number" required />
              </div>
			  <div class="field">
                        <label >Status<span class="required-mark">*</span></label>
                        <input type="text"  name="status" value="" class="form-control" placeholder="Status" required />
              </div>
                    <div class="field">
                        <input type="submit" class="button" value="Submit" />
                    </div>
					  </form>
					  
					  
					  
					  
              

</div>	



			<div class="container" style="background-color: #FFFFFF">
			
			
				<div class="row" >
				<a style="background-color: #94daf7" > Accepted </br> Changet Status if Visited  </a>
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
				$sql = "SELECT * FROM cart where  status='Accepted'  "; 
				$result = mysqli_query($conn, $sql); 
		echo "<table table-striped>";?>
 <table class="table table-striped">	
<?php 
		echo "<tr>";

		
		
		echo "
	<th>Serial_number</th>
			<th>Package_Id</th>
			<th>Package_Name</th>
			<th>User Name</th>
			<th>Package_Price</th>
			<th>Status</th>"; 
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
				echo "<td>" . $row['user_name'] . "</td>";
				echo "<td>" . $row['amount'] . "</td>";
				echo "<td>" . $row['status'] . "</td>";
				
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
					
					<form action="booking1.php" method="POST">
                   
                    <div class="field">
                        <label>Serial_number<span class="required-mark">*</span></label>
                        <input type="number"  name="Serial_number_v" value="" class="form-control" placeholder="Serial_number" required />
              </div>
			  <div class="field">
                        <label >Status<span class="required-mark">*</span></label>
                        <input type="text"  name="status_v" value="" class="form-control" placeholder="Status" required />
              </div>
                    <div class="field">
                        <input type="submit" class="button"  />
                    </div>
					  </form>
			
					  
</div>	
<div class="container" style="background-color: #FFFFFF">
				<div class="row" >
				<a style="background-color: #94daf7" > Visited </a>
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
				$sql = "SELECT * FROM cart where  status='Visited'  "; 
				$result = mysqli_query($conn, $sql); 
		echo "<table table-striped>";?>
 <table class="table table-striped">	
<?php 
		echo "<tr>";

		
		
		echo "
	<th>Serial_number</th>
			<th>Package_Id</th>
			<th>Package_Name</th>
			<th>User Name</th>
			<th>Package_Price</th>
			<th>Status</th>"; 
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
				echo "<td>" . $row['user_name'] . "</td>";
				echo "<td>" . $row['amount'] . "</td>";
				echo "<td>" . $row['status'] . "</td>";
				
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
</div>	











</body>
</html>
