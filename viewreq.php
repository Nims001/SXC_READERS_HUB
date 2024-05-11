<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Book Requests</title>
   <script src = "JavaScripts/requests.js" type = "text/javascript">
    
   </script>
  <link rel="stylesheet" href="CSS/homestyle.css">
  <style>
    body {
  font-family: 'Arial', sans-serif;
  background-color: #f8f9fa;
  color: #333;
  overflow: auto;
  
}
 
   .table-div{
    margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
   }
    table {
      border-collapse: collapse;
      width: 80%;
      max-width: 800px;
      margin: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      border-radius: 8px;
      background-color: #fff;
    }

    th, td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #3498db;
      color: #fff;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

   
  </style>
</head>
<body>
 
 <div class = "background"> </div>
 <?php
 include('PHP/nav2.php');
 ?>
<div class = "table-div">
  
<table>
  <thead>
    <tr>
      <th> S.N.</th>
      <th>Request ID</th>
      <th>Title</th>
      <th>Author</th>
      <th>Genre</th>
      <th>Publication</th>
      <th>Edition</th>
      <th>Option</th>
    </tr>
    </tr>
  </thead>
<tbody>
  <?php 
  require ('PHP/connection.php');
  $sql = "SELECT * from bookreq";
  $a = mysqli_query($conn,$sql);
  $i = 1;
  foreach($a as $a){
   
    echo " <tr id = 'row$i'>
    <td> $i </td>
    <td> {$a['id']} </td>
    <td>{$a['title']}</td>
    <td>{$a['author']}</td>
    <td>{$a['genre']}</td>
    <td>{$a['publication']}</td>
    <td>{$a['edition']}</td>
    <td> <input type = 'button' value = 'Accepted' palceholder = 'Accept' onclick = 'acceptreq(\"{$a['id']}\",\"{$a['title']}\",\"{$a['author']}\",\"{$a['genre']}\",\"{$a['publication']}\",\"{$a['edition']}\")'> </td>
  </tr>";
  $i++;

  }
  ?>
  </tbody>
    
  
</table>
</div>
</body>
</html>
