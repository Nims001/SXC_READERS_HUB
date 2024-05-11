<?php

require 'connection.php';

$title = $_POST['title'];
$author = $_POST['author'];
$publication = $_POST['publication'];
$edition = $_POST['edition'];
$genre = $_POST['genre'];


$sql = "INSERT INTO bookreq(title, author, publication, edition, genre) VALUES ('$title', '$author', '$publication', '$edition', '$genre');";
$a = mysqli_query($conn,$sql);

if ($a) {
    echo "Book request created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: ../request.php");
exit();

?>
