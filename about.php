
		<?php
              session_start();
              $name=$_SESSION['username']
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

    
	
	<body style="background-color: #E0E0E0" >

   

	<div class="top">
			<a href="Login.php">Admin Login</a>
			<a class="topright" href="logout.php">Logout</a>
			<a class="topright"><?php echo $name; ?></a>
		
			
		</div>

	
		<div style="background-color: #ffffff">
		
			<h1 style="text-align:center" >Welcome To TOURPARTNER.COM.BD</h1>
		
		<div class="topnav">
			<a  href="splash_screen.php">Home</a>
			<a class="active" href="about.php">About</a>
			<a href="tour_package.php">Tour Package</a>
			<a href="privacy_policy.php">Tour Destination</a>
			<a href="terms.php">Terms of Use</a>
			<a href="contact_us.php">Contact Us</a>
			<a class="topright" href="location.php">Location Information</a>
					<a href="cart.php">Cart</a>
		</div>
			<div class="container">

		<div class="contain">
		 
         <iframe class="responsive-iframe" src="https://www.youtube.com/embed/2hgJs1vlqYs?autoplay=1&controls=0"></iframe>
         </div>
         </div>

		 <div>
			<h1 class="about_head">About US</h1>
		 </div>
		 <div>
			<p class="about_paragraph">Tourplaner.com.bd is one kind of documentation type tour place website where you can find about tour place in bangladesh. 
				Basically we first add different kind of travel place and their package information in this website . Next we will add different kind of feature here. We can select package from here . And book everthing through this website 
			</p>
		 </div>

		 
		
		
        

		</div>


		</body>

</html>