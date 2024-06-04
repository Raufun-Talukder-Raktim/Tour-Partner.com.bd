<?php
include("connection.php");
session_start();

if(isset($_POST['store'])){
$use = $_POST['user'];

$pass = $_POST['pass'];



$query="SELECT * from signup WHERE username = '$use' && password ='$pass'";

$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

echo $total;
if($total==1)
{
  $_SESSION['username'] = $use;
  //echo '<script>alert("sucessful login")</script>';
  header("Location:splash_screen.php");
  //exit();

}
else{
  
  echo '<script>alert("failed to login")</script>';
}
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/a500fa0774.js" crossorigin="anonymous"></script>
    <title>Sign-in Form</title>
    <style>
        * {
  box-sizing: border-box;
}
    .column {
  float: left;
 
   /* Should be removed. Only for demonstration */
}

.left {
  width: 50%;
  

}

.right {
  width: 50%;
  padding:20px;
  
}
.sign-in-form{
   justify-content: center;
   align-items: center;
   text-align: center; 
   display: flex;
   flex-direction: column;
   padding: 80px;
   height:100%;
   

}
.social-icon
{
    border: 1px solid #ddd;
    border-radius:50%;
    display: inline-flex;
    justify-content:center;
    align-items: center;
    margin: 5px;
    height: 40px;
    width: 40px;
}
.btn_solid{
    background-color: #4d84e2;
    border-radius:12px;
    border:1px solid #ff4b2b;
    color:#fff;
    font-size:10px;
    font-weight:bold;
    padding:8px 12px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;

}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.input-field {
  max-width: 380px;
  width: 100%;
  background-color: #f0f0f0;
  margin: 10px 0;
  height: 55px;
  border-radius: 55px;
  display: grid;
  grid-template-columns: 15% 85%;
  padding: 0 0.4rem;
  position: relative;
}
.input-field input {
  background: none;
  outline: none;
  border: none;
  line-height: 1;
  font-weight: 600;
  font-size: 1.1rem;
  color: #333;
}

.input-field input::placeholder {
  color: #aaa;
  font-weight: 500;
}
.title {
  font-size: 2.2rem;
  color: #444;
  margin-bottom: 10px;
  
}
.input-field i {
  text-align: center;
  line-height: 55px;
  color: #acacac;
  transition: 0.5s;
  font-size: 1.1rem;
}
.btn {
  width: 150px;
  background-color: #5995fd;
  border: none;
  outline: none;
  height: 49px;
  border-radius: 49px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
  transition: 0.5s;
}

.btn:hover {
  background-color: #4d84e2;
}
.social-text {
  padding: 0.7rem 0;
  font-size: 1rem;
}
iframe.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}
.column left{
  justify-content: center;
  
  
}
.one{
  padding:40px;
  width:auto;
  height:200px;
  text-align:center;
  font-size: 1.2rem;
  color: #444;
  font-family:verdana;
}
@keyframes anitext {
  0%   {background-color: red;}
  25%  {background-color: yellow;}
  50%  {background-color: blue;}
  100% {background-color: green;}
}

</style>


</head>
<body>
<div class = "row">
<div class= "column left">
  <div class = "one">
    <h1>WELCOME TO TourPlaner.com.bd</h1>
</div>
<iframe
  class="center"
  width="560"
  height="315"
  src="https://www.youtube.com/embed/fN21oOdni_c?autoplay=1&mute=1&controls=0"
  title="YouTube video player"
  frameborder="0"
  allowfullscreen
>
</iframe>
</div>
<div class = "column right">
<form action="#" class="sign-in-form" method = "POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="user"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass" />
            </div>
            <input type="submit" value="Login" class="btn" name="store"/>
            <div class="panel right-panel" style=":center">
          <div class="content"style="color:black">
            
            <a href="Signup.php">
            
            <h3>New here !! Please click here for Signup</h3>
            </a>
 
            <a href="Admin.php">
            <i class="fas fa-user"><h3>Admin Login</h3></i>
            </a>


            
          </div>
        </div>
          </form>
          
</div>
</div>
</body>
</html>
