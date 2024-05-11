<?php
require 'connection.php';
session_start();
if($_POST['Submit'])
{
	
	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	
	$email = $_POST['email'];
    $pass = $_POST['pass'];
	$npass = $_POST['npass'];
	$cpass = $_POST['cpass'];
    if($cpass = $npass){
    $sql = "UPDATE users SET f_name = '$first_name', 
				l_name = '$last_name', 
                cpassword = '$npass'
				 
				where email = '$email' and cpassword = '$pass' ";
               
	$data = mysqli_query($conn,$sql);

	if ($data)
	{
		echo "Record updated successfully";
        $_SESSION = array();
        session_destroy();
        header("location: http://localhost/sxc/SXC_Readers_Hub/login.html" );
    }
	
	
	else
	{
		echo " record not updated ";
	}
    }


}
	
?>