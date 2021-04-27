<?php
  session_start();
?>

<!doctype html>
<html lang="en">

<head>
<script src="script.js"></script>
  <link rel="icon" type="image/png" href="images/logo_transparent.png" />
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="Mystyle.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="images/logo_transparent.png" />
  <title>Kiddies Cove</title>


  <style>
    @media screen and (max-width: 991px) {
    .btn2{
      position: absolute;
      top:9rem;
      left:11rem;
    }
    }

    .btn2{
      color: black;
      display: block;
      text-decoration: none;
      float: left;
      font-family: Verdana;
      font-size: larger;
      list-style-type:none;
    }

    .nav-link-Admin{
      color: black;
      display: block;
      text-decoration: none;
      float: left;
      font-family: Verdana;
      font-size: larger;
      list-style-type:none;
    }

    .nav-link-Admin:hover {
      color: black;
      list-style-type:none;
      text-decoration: none;
}
  </style>

</head>

<body>

  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo_transparent.png" width="100" height="100" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item1">
            <a class="nav-link1" href="index.php">Home </a>
          </li>
          <li class="nav-item1">
            <a class="nav-link1" href="#">Registration </a>
          </li>

          <li class="nav-item1">
            <a class="nav-link1" href="#">Services</a>
          </li>

          <li class="nav-item1">
            <a class="nav-link1" href="#">Testimonials</a>
          </li>

          <li class="nav-item1">
            <a class="nav-link1" href="#">Contact</a>
          </li>



        </ul>

            <?php
            if(isset($_SESSION['Admin']))
            {
              ?>
          

        <div class="btn2">
        
        <li class="nav-item1 btn btn-warning">
            <a class="nav-link-Admin" href="index_edit.php">Admin Acoount</a>
          </li>

          <li class="nav-item1 btn btn-warning">
            <a class="nav-link-Admin" href="logout.php">Log Out</a>
          </li>
        
         
        </div>    

        <?php
            }
        elseif(isset($_SESSION['User']))
        {
          ?>

          <div class="btn2">
              <!-- Example single danger button -->
              <div class="btn-group btn-warning ">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    User Account
                  </button>

                  <li class="nav-item1 btn btn-danger">
                    <a class="nav-link-Admin" href="logout.php">Log Out</a>
                  </li>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Day Details</a>
                    <a class="dropdown-item" href="#">Add Testimonial</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Log Out</a>
                  </div>
                </div>
           </div>

        <?php
            }
        else
        {
          ?>

        <div class="btn1">
          <button type="button" id="btn" class="btn btn-danger">Sign Up</button>
          
          <a href="login.php" type="button" id="btn" class="btn btn-warning">Log In</a>
        </div>
          <?php
        }

?>

      </div>
    </nav>
  </header>







  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>