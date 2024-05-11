<?php
session_start();
require 'PHP/nav2.php';


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.html");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript" src="JavaScripts/cards.js"> </script>


    <title>Make a Book Request</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            text-align: left;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
        }

        .book-form {
            background-color: #0000;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;

            margin: auto;
            /* Center horizontally */
        }

        .book-form label {
            display: block;
            margin-bottom: 8px;
            color: white;
        }

        .book-form input,
        .book-form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;

        }

        .book-form input:focus,
        .book-form select:focus {
            border-color: #6a7ec7;
        }

        .book-form button {
            display: flex;
            justify-content: center;
            background-color: #6a7ec7;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;



        }



        .book-form button:hover {
            background-color: #4b5a9e;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            min-height: 100vh;
            background-image: url("CSS/homepage.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            z-index: -1;
            filter: blur(5px);

        }
    </style>
</head>

<body>
    <div class="background"> </div>
    <form class="book-form" method="post" action = "PHP/sendbook.php" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>

        <label for="genre">Genre:</label>
        <select id="genre" name="genre" required>
            <option value="Fiction">Fiction</option>
            <option value="Non-Fiction">Non-Fiction</option>
            <option value="Mystery">Mystery</option>
            <option value="Sci-Fi">Sci-Fi</option>
            <option value="Horror">Horror</option>
            <option value="Academics">Academics</option>
        </select>

        <label for="publication">Publication:</label>
        <input type="text" id="publication" name="publication" required>

        <label for="edition">Edition:</label>
        <input type="number" id="edtion" name="edition" required>

       
        


        <button type="submit" class="container" onclick="submitForm()">Submit</button>

    </form>

</body>

</html>