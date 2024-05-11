<?php
require 'connection.php';
$sq = "SELECT * from users";
$a = mysqli_query($conn, $sq);
$c = 0;

if ($_POST['Submit']) {
	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];

	$email = $_POST['email'];
	$ppassword = $_POST['pass'];

	$cpassword = $_POST['cpass'];


	if ($first_name != "" && $last_name != "" && $ppassword != "" &&  $email != "" && $cpassword != "" && $ppassword == $cpassword) {
		foreach ($a as $a) {

			if ($a['email'] == $email && $a['cpassword'] == $cpassword)
				$c++;
		}
		if ($c == 0) {
			$sql = "INSERT INTO users (f_name, l_name, email, ppassword ,cpassword) 
				VALUES ('$first_name','$last_name','$email','$password','$cpassword')";
			// echo $sql; exit();

			$data = mysqli_query($conn, $sql);
			// echo $data;exit;

			if ($data) {

?>
				<META HTTP-EQUIV="refresh" CONTENT="0; URL=http://localhost/sxc/SXC_Readers_Hub/login.html">
			<?php
			}
		} else {
			echo 'You already have an account
		<a href="http://localhost/sxc/SXC_Readers_Hub/login.html"> Login here</a>';
			?>
			
<?php
		}
	} else {
		echo "All fields are required";
	}
}


?>