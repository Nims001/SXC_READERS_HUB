<?php 
require 'connection.php';
session_start();




$email = $_POST['email'];
$ppassword = $_POST['pass']; 

$sq = "DELETE from users where email = '$email' and cpassword = '$ppassword'";
$a = mysqli_query($conn,$sq);

if($a){
    echo "successfully deleted";
    $_SESSION = array();
session_destroy();
header("location: http://localhost/sxc/SXC_Readers_Hub/login.html" );
}


else{
  echo "Delete Failed";
  header("location: http://localhost/sxc/SXC_Readers_Hub/" );
}




?>






