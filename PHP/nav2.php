<!doctype html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

</head>


  <nav class="navbar navbar-dark navbar-expand-lg ">
    <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/sxc/SXC_Readers_Hub/home.php">
      <img src="images/sxc2.png" alt="Bootstrap" width="60" height="70">
      SXC READER'S HUB
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
            
            if($_SESSION['isadmin'] != true){
              echo $_SESSION['name'];}
              else {
                $a = $_SESSION['name'];
                echo "$a"."[admin]";
              }
            ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="http://localhost/sxc/SXC_Readers_Hub/PHP/logout.php"  style = "color:red">Logout</a></li>
              
            </ul>
          </li>
          
        </ul>
        
      </div>
    </div>
  </nav>

 


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>




</html>