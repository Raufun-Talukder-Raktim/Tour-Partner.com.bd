<?php
include("connection.php");
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
	
	<body style="background-color: #E0E0E0" >

	
	<div class="top">
			<a href="admin.php">Admin Login</a>
			<a class="topright" href="logout.php">Logout</a>
			<a class="topright"><?php echo $name; ?></a>
		
			
		</div>

	
		<div style="background-color: #ffffff">
		
			<h1 style="text-align:center" >Welcome To TOURPARTNER.COM.BD</h1>
		<div style="background-color: #ffffff">
		
		<div class="topnav">
			<a  href="splash_screen.php">Home</a>
			<a href="about.php">About</a>
			<a href="tour_package.php">Tour Package</a>
			<a class="active" href="privacy_policy.php">Tour Destination</a>
			<a href="terms.php">Terms of Use</a>
			<a href="contact_us.php">Contact Us</a>
			<a class="topright" href="location.php">Location Information</a>
			<a href="cart.php">Cart</a>
		</div>
		<div>
			<h1 class="tourdes_head">Popular tour Destination</h1>
		 </div>
		 <div style ="text-align:center;color:black">
		 <?php

    $query = 'SELECT id,name,youtubeid,description
      FROM videos
      ORDER BY name';

    $result = mysqli_query($conn, $query);

    if (!$result)
    {
      echo 'Error Message: ' . mysqli_error($conn) . '<br>';
      exit;
    }

    echo '<p>The query found ' . mysqli_num_rows($result) . ' rows:</p>';

    while ($record = mysqli_fetch_assoc($result))
    {
      echo '<hr>';
	  echo '<h2 style="padding:15px">'.$record['name'].'</h2>';
	  //echo $record['youtubeid'];
	  $url = 'https://www.youtube.com/watch?v='.$record['youtubeid'];
      //echo '<a href="'.$url.'">'.$url.'</a>';
	  echo '<iframe width="900" height="400" src="https://www.youtube.com/embed/'.$record['youtubeid'].'?modestbranding=1" 
		rameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
		allowfullscreen></iframe>';
	echo '<h3 class="about_paragraph">'.$record['description'].'</h3>';
    }







    ?> 
	</div>
		
				</div>
				
		</body>

</html>