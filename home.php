<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: login.html");
  exit;
}
if ($_SESSION['isadmin'] == true) {
  $a = 1;
}


?>
<!doctype html>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script type="text/javascript" src="JavaScripts/cards.js"> </script>
  <title>Welcome - <?php echo $_SESSION['name']; ?></title>
  <link href="CSS/homestyle.css" rel="stylesheet">
  <style>
    /* Global Styles */
    body {
      font-family: 'Arial', sans-serif;

      color: #333;
      overflow: auto;

    }





    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* About Us Section Styles */
    #about-us {

      color: #fff;
      padding: 50px 20px;
      text-align: center;
    }

    #about-us h1 {
      font-size: 2.5em;
      margin-bottom: 20px;
    }

    .about-us-para {
      font-size: 1.2em;
      line-height: 1.6;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      #about-us {
        padding: 40px 10px;
      }

      #about-us h1 {
        font-size: 2em;
      }
    }

    @media (max-width: 576px) {
      #about-us {
        padding: 30px 10px;
      }

      .about-us-para {
        font-size: 4em;
      }
    }

    .card {
      margin: 30px;
      background-color: #333;
      color: black;
      border-color: black;

    }

    .card-body {

      background-color: black;
      border-color: black;
    }

    .card-img-top {

      background-color: black;
      border-color: black;
    }

    .latest-release h1 {
      font-size: 2.5em;
      color: white;
      margin-bottom: 20px;
      display: flex;
      justify-content: center;
    }

    .latest-release {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      align-content: center;
      justify-content: center;
    }
  </style>
</head>

<body>
  <?php require 'PHP/nav.php'; ?>
  <h1 style="font-size: 2.5em;
      color: white;
      margin-bottom: 20px;
      display: flex;
      justify-content: center;"> Latest Books</h1>
  <div class="latest-release">
    <?php
    require 'PHP/connection.php';
    $sql = "SELECT * from books";
    $a = mysqli_query($conn, $sql);

    foreach ($a as $a) {

      echo ' <div class="card" style="width: 20rem;">
      <img class="card-img-top" src="images/book-images/' . $a['file'] . '" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title" style = "color:white;">' . $a['title'] . '</h5>
        
       
        <p class="card-text" style = "color:white;">Author: ' . $a['author'] . '</p>
        <p class="card-text" style = "color:white;">Genre: ' . $a['genre'] . '</p>
        <p class="card-text" style = "color:white;">Publication: ' . $a['publication'] . ' </p>
        <p class="card-text" style = "color:white;">Edition: ' . $a['edition'] . ' </p>
        
      </div>
      </div>

     
      
    ';
    }
    ?>

  </div>
  <div id="about-us">
    <h1> About Us</h1>
    <p class="about-us-para">
      Welcome to SXC Reader's Hub, your gateway to a world of knowledge and imagination.
      At SXC Reader's Hub, we take pride in fostering a love for reading among students at St. Xavier's College Maitighar.
      Our platform serves as a dynamic book request system, enabling students to explore an extensive library catalog and effortlessly request the books they crave.
      We believe in the power of literature to expand minds, ignite curiosity, and shape futures. Whether you're on a quest for academic resources or seeking a thrilling escape
      into fiction, SXC Reader's Hub is here to cater to your literary desires. Our mission is to connect students with the books they yearn for, promoting a culture of reading and intellectual exploration.
      Join us on this literary journey, where the pages come to life, and dreams unfold with every turn. SXC Reader's Hub – unlocking the doors to a world of stories and endless possibilities.
    </p>
  </div>

</body>

</html>