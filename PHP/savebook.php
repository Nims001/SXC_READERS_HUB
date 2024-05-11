<?php


require 'connection.php';





$title = $_POST['title'];
$author = $_POST['author'];
$publication = $_POST['publication'];
$edition = $_POST['edition'];
$genre = $_POST['genre'];
$file_name = $_FILES['cover']['name'];
$temp_name = $_FILES['cover']['tmp_name'];
$folder = '../images/book-images/'.$file_name;

move_uploaded_file($temp_name,$folder);

$sql = "INSERT INTO books (title, author, publication, edition, genre, file) VALUES ('$title', '$author', '$publication', '$edition', '$genre','$file_name')";
$a = mysqli_query($conn,$sql);

if ($a) {
    echo "Book saved successfully!";
    echo "
<script>
    alert('The book request data will be deleted');
    let x = parseInt(localStorage.getItem('id'));
    
   
    
    window.location.href = 'http://localhost/sxc/SXC_READERS_HUB/PHP/deleterequest.php?x=' + encodeURIComponent(x);
  </script>
";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






?>
