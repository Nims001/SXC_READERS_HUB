<?php
require 'connection.php';


$email = $_POST['email'];
$ppassword = $_POST['pass']; 
$admin = $_POST['admin'];
$sq = "SELECT * from users";
$a = mysqli_query($conn,$sq);
$c = 0;
foreach($a as $a){
  if($a['email'] == $email && $a['cpassword'] == $ppassword){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['name'] = $a['f_name'];
    $_SESSION['password'] = $a['cpassword'];
    $_SESSION['isadmin'] = false;
    if($admin && $a['admin'] == 1){
          $_SESSION['isadmin'] = true;

    }
    header("location: http://localhost/sxc/SXC_Readers_Hub/home.php");
    $c++;
    exit();
  }
  
}
if($c == 0){
  echo "Incorrect Password <br>";
  echo "If you do not have an account ";
  echo '<a href="http://localhost/sxc/SXC_Readers_Hub/signup.html"> Sign Up here</a>';}





?>
