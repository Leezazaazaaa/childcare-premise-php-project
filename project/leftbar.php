<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="images/logo_transparent.png" />
  <title>Kiddies Cove</title>
<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: auto;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">index-edit</a>
          <a class="dropdown-item" href="#">registration-edit</a>
          <a class="dropdown-item" href="#">day_details_edit</a>
          <a class="dropdown-item" href="#">testimonial_manage</a>
          <a class="dropdown-item" href="#">contact_us_manage</a>
          <a href="logout.php" type="button" id="btn" class=" dropdown-item btn btn-warning">Logout</a>
        </div> -->
<div class="sidebar">

<a href="#"><i class="fa fa-fw fa-wrench"></i> Admin Panel</a>
  <hr>

  <a href="index.php"><i class="fa fa-fw fa-envelope"></i> Home</a>
  <hr>

  <a href="#home"><i class="fa fa-fw fa-home"></i> Edit <br>Homepage</a>
  <hr>
  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Edit <br>Registration</a>
  <hr>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Edit <br>Day Details</a>
  <hr>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Mange <br>Testimonials</a>
  <hr>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Mange <br>Contact</a>
  <hr>
  <a href="logout.php"><i class="fa fa-fw fa-envelope"></i> LogOut</a>
  <hr>
</div>

  

  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>
</html> 