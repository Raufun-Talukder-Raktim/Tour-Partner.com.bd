
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
	
	<body style="background-color: #ffffff" >
	

	<div class="top">
			<a href="admin.php">Admin Login</a>
			<a class="topright" href="logout.php">Logout</a>
			<a class="topright"><?php echo $name; ?></a>
		
			
		</div>

	
		<div style="background-color: #ffffff">
		
			<h1 style="text-align:center" >Welcome To TOURPARTNER.COM.BD</h1>
		
		<div class="topnav">
			<a class="active" href="splash_screen.php">Home</a>
			<a href="about.php">About</a>
			<a href="tour_package.php">Tour Package</a>
			<a href="privacy_policy.php">Tour Destination</a>
			<a href="terms.php">Terms of Use</a>
			<a href="contact_us.php">Contact Us</a>
			<a href="location.php">Location Information</a>
			
		</div>
		<section class="intro">
		<h2 class="home1">Are You ready for the advanture !!</h2>
			<div class="container">
		<div class="contain"> 
		 
         <iframe class="responsive-iframe" src="https://www.youtube.com/embed/PJXrCwlPIZc?autoplay=1&controls=0"></iframe>
         </div>
         </div>
		 <div class="container">
		 <div class="button1">
		 <h2 class="home1">Explore Tour package !!</h2>
			 <a href="tour_package.php">
			 <img src="tour2.png" alt="Snow" style=" display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;">
			 <button class="btn"></button>
		 </a>
		 </div>
		 </div>
		 <div class="container">
		 <div class="button1">
		 <h2 class="home1">Explore Destination !!</h2>
		 <a href="privacy_policy.php">
		 <img src="tour1.png" alt="Snow" style="display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;">
         <button class="btn"></button>
         </a>
			 
		 </div>
		 </div>
		 

        </section>
		</div>	

</div



		

	</body>
	
</html>