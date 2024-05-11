<?php 
require 'connection.php';
$x = $_GET['x'];

$sql = "DELETE from bookreq
          where id = $x";

$a = mysqli_query($conn,$sql);

if($a){
    echo "<script> alert('The request data has been deleted')  </script>";
    
}

else{
    echo "Error";
}

header("location:http://localhost/sxc/SXC_READERS_HUB/viewreq.php");

?>