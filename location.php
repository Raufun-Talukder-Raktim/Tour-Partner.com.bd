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
			<a  href="about.php">About</a>
			<a href="tour_package.php">Tour Package</a>
			<a href="privacy_policy.php">Tour Destination</a>
			<a href="terms.php">Terms of Use</a>
			<a href="contact_us.php">Contact Us</a>
			<a class="active" href="location.php">Location Information</a>
			
		</div>
		<section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="topnav">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Location Information</h2>
                  
                </div>
            </div>
        </section>
      <br>

		<img src = "finalproduct.jpg" class = "Splash_image" alt="Image Not Found" usemap="#finalproductmap" width="100%" >

		<map name="finalproductmap">
		
			<area shape="rect" coords="0,0,186,331"     href="https://www.wikidata.org/wiki/Q64517866">
			<area shape="rect" coords="186,0,371,333"   href="https://en.wikipedia.org/wiki/Bichnakandi">
			<area shape="rect" coords="371,0,557,333"  	href="https://en.wikipedia.org/wiki/Cox%27s_Bazar">
			<area shape="rect" coords="557,0,742,333"   href="https://en.wikipedia.org/wiki/Foy%27s_Lake">
			<area shape="rect" coords="742,0,930,333"   href="https://en.wikipedia.org/wiki/Kuakata">
			<area shape="rect" coords="930,0,1117,333"  href="https://en.wikipedia.org/wiki/Sajek_Valley">
			<area shape="rect" coords="1117,0,1303,333" href="https://en.wikipedia.org/wiki/Sitakunda_Upazila">
			<area shape="rect" coords="1303,0,1490,333" href="https://en.wikipedia.org/wiki/Sreemangal_Upazila">
			 
			<area shape="rect" coords="0,333,185,646"    href="https://en.wikipedia.org/wiki/Chittagong_Hill_Tracts">
			<area shape="rect" coords="185,333,371,646"  href="https://en.wikipedia.org/wiki/Ahsan_Manzil">
			<area shape="rect" coords="371,333,557,646"  href="https://en.wikipedia.org/wiki/Inani_Beach">
			<area shape="rect" coords="557,333,742,646"  href="https://en.wikipedia.org/wiki/Jaflong">
			<area shape="rect" coords="742,333,930,646"  href="https://en.wikipedia.org/wiki/Lalakhal">
			<area shape="rect" coords="930,333,1117,646" href="https://en.wikipedia.org/wiki/St._Martin%27s_Island">
			<area shape="rect" coords="1117,333,1303,646"href="https://en.wikipedia.org/wiki/Sundarbans">
			<area shape="rect" coords="1303,333,1490,646"href="https://en.wikipedia.org/wiki/Sat_Gambuj_Mosque">
			
					</div>
		</map>
		</body>
	
</html>