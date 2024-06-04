<?php
include("connection.php");
session_start();

if(isset($_POST['store'])){
$use = $_POST['user'];

$pass = $_POST['pass'];



$query="SELECT * from admin_login WHERE username = '$use' && password ='$pass'";

$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

//echo $total;
if($total==1)
{
//$_SESSION['username'] = $use;
  //echo '<script>alert("sucessful login")</script>';
  header("Location:admin2.php");
  //exit();

}
else{
  
  echo '<script>alert("Incorrect password")</script>';
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



/* Clear floats after the columns */

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

</style>

    <title>Admin</title>
</head>
<body>
<form action="#" class="sign-in-form" method = "POST">
            <h2 class="title">ADMIN LOGIN</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="user"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass" />
            </div>
            <input type="submit" value="Login" class="btn" name="store"/>
            
          </form>
</body>
</html>