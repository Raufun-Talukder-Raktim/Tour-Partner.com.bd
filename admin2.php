<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
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
.input-field{
            padding:20px;
            box-size:20px;
            
        }

        input{
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
.tour1{
  
  justify-content: center;
  align-items: center;
  text-align:center;
  border: 3px solid #73AD21;
  padding:10px;
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
  <a class="active" href="admin2.php">Insert and Delete</a>
  <a href="userlist.php">User List</a>
  <a href="message.php">User Message</a>
  <a href="booking.php">Booking Information</a>
  <a href="login.php">Exit</a>
</div>

<div class="content">
<h1 style="text-align:center;color:black;padding:20px">Admin Panel<h1>


  <form action="#" class="tour1" method = "post">
            <h2 class="">ADD AND DELETE TOUR DESTINATION PLACE</h2>
            <div class="input-field">
              
              <input type="text" placeholder="ADD TOUR PLACE NAME"  name = "login_user" />
            </div>
            <div class="input-field">
             
              <input type="text" placeholder="ADD YOUTUBE ID 11 CHARACTER"  name = "email"/>
            </div>
            <div class="input-field">
             
              <input type="text" placeholder="ADD DESCRIPTION"  name = "password"/>
            </div>
            <input type="submit" class="btn" value="INSERT" name = "store" />
            <input type="submit" class="btn" value="DELETE" name = "store2" />
            
          </form>
          
          <form action="#" class="tour1" method = "post">
            <h2 class="">ADD TOUR PACKAGE</h2>
            <div class="input-field">
              
              <input type="text" placeholder="Insert Package Name"  name = "packname" />
            </div>
            <div class="input-field">
             
              <input type="text" placeholder="Package Location"  name = "packlocation"/>
            </div>
            <div class="input-field">
             
              <input type="text" placeholder="Package Price"  name = "packprice"/>
            </div>
            <div class="input-field">
             
              <input type="text" placeholder="Package Feature"  name = "packfeature"/>
            </div>
            <div class="input-field">
             
              <input type="text" placeholder="Copy image url from website"  name = "packimage"/>
            </div>
            <div class="input-field">
             
              <input type="text" placeholder="Package End Date"  name = "packdelete"/>
            </div>
            <div class="input-field">
             
              <input type="text" placeholder="Package Details"  name = "packdetails"/>
            </div>
            <input type="submit" class="btn" value="INSERT" name = "store3" />
            <input type="submit" class="btn" value="DELETE" name = "store4" />
            
          </form>
</div>

</body>
</html>
<?php

if(isset($_POST['store3'])){
$one = $_POST['packname'];
$two = $_POST['packlocation'];
$three = $_POST['packprice'];
$four = $_POST['packfeature'];
$five = $_POST['packimage'];

$seven = $_POST['packdelete'];
$eight = $_POST['packdetails'];
$query="INSERT INTO insert_image VALUES ('','add','$five','$one','','$two','$three','$four','$eight','Current Month','$seven')";

$data = mysqli_query($conn,$query);

if($data)
{
  
  echo '<script>alert("Data inserted into database")</script>';
  

}
else{
  
  echo '<script>alert("Failed to insert data in database")</script>';
}
}
if(isset($_POST['store4'])){
  $one = $_POST['packname'];
  
  $query="DELETE FROM videos WHERE name='$one'";
  $data = mysqli_query($conn,$query);
  
  if($data)
  {
    
    echo '<script>alert("Data deleted from database")</script>';
    
  
  }
  else{
    
    echo '<script>alert("Failed to delete data in database")</script>';
  }
  }
if(isset($_POST['store2'])){
    $use = $_POST['login_user'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    
    $query="DELETE FROM videos WHERE name='$use'";
    $data = mysqli_query($conn,$query);
    
    if($data)
    {
      
      echo '<script>alert("Tour Place Delete Sucessful")</script>';
      
    
    }
    else{
      
      echo '<script>alert("Tour Place doesnot found")</script>';
    }
    }
    if(isset($_POST['store'])){
      $use = $_POST['login_user'];
      $email = $_POST['email'];
      $pass = $_POST['password'];
      
      
      $query="INSERT INTO videos VALUES ('','$use','$email','$pass')";
      $data = mysqli_query($conn,$query);
      
      if($data)
      {
        
        echo '<script>alert("Data inserted into database")</script>';
        
      
      }
      else{
        
        echo '<script>alert("Failed to insert data in database")</script>';
      }
      }


?>