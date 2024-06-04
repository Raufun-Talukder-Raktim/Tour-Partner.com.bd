<?php

$servername = "localhost";
$username = "root";
$password="";
$dbname="tour_signup";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connection ok";
}
else{
    echo "connection failed because of ".mysqli_connect_error();
}

?>



