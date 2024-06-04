<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a500fa0774.js" crossorigin="anonymous"></script>
    <title>Document</title>
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
.sign-up-form{
   justify-content: center;
   align-items: center;
   text-align: center; 
   display: flex;
   flex-direction: column;
   padding: 50px;
   height:100%;
   

}
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
<form action="#" class="sign-up-form" method = "post">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username"  name = "login_user" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email"  name = "email"/>
            </div>
            <div class="input-field">
             <i class="fa-solid fa-key"></i>
              <input type="password" placeholder="Password"  name = "password"/>
            </div>
            <input type="submit" class="btn" value="Sign up" name = "store" />
            <div class="panel right-panel" style=":center">
          <div class="content"style="color:black">
          
          <a href="Login.php">
          <h3>Already have an account?Click here for Sign-in</h3>
            </a> 
            
          </div>
        </div>
          </form>
</div>
</div>
    
</body>
</html>
<?php

if(isset($_POST['store'])){
$use = $_POST['login_user'];
$email = $_POST['email'];
$pass = $_POST['password'];


$query="INSERT INTO signup VALUES ('$use','$email','$pass')";
$data = mysqli_query($conn,$query);
if($data)
{
  
  echo '<script>alert("Data inserted into database")</script>';
  header("Location:./Login.php");
  exit();

}
else{
  
  echo '<script>alert("Failed to insert data in database")</script>';
}
}


?>