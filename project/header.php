<?php
// starting session
  session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <link rel="icon" type="image/png" href="images/logo_transparent.png" />
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="script.js"></script>
    <link rel="stylesheet" href="Mystyle.css">  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="images/logo_transparent.png" />
  <title>Kiddies Cove</title>


  <style>

/* body{
background-image: url(images/pic7.jpg);
background-repeat:no-repeat;
background-size:cover; 
font-family: "Times New Roman", Times, serif, Verdana;
}  */
  
@import url(https://fonts.googleapis.com/css?family=Open+Sans);
@import url(https://fonts.googleapis.com/css?family=Bree+Serif);







.toggle,
[id^=drop] {
	display: none;
}

/* Giving a background-color to the nav container. */
nav { 
	margin:0;
	padding: 0;
	background-color: #512DA8;
}

#logo {
	display: block;
	padding: 10 20px;
	float: left;
	font-size:20px;
	line-height: 60px;
}

/* Since we'll have the "ul li" "float:left"
 * we need to add a clear after the container. */

nav:after {
	content:"";
	display:table;
	clear:both;
}

/* Removing padding, margin and "list-style" from the "ul",
 * and adding "position:reltive" */
nav ul {
	float: left;
	padding:0;
	margin:0;
	list-style: none;
	position: relative;
	}
	
/* Positioning the navigation items inline */
nav ul li {
	margin: 0px;
	display:block;
	float: left;
	background-color:#512DA8;
	}

/* Styling the links */
nav a {
	display:block;
	color:#FFF;
	font-size:17px;
	text-decoration:none;
  
}

 nav a:hover {

  list-style-type:none;
  text-decoration:none;
  color: black;
  
 
} 



/* Hide Dropdowns by Default
 * and giving it a position of absolute */
nav ul ul {
	display: none;
	position: absolute; 
	/* has to be the same number as the "line-height" of "nav a" */
	top: 50px; 
}
	
/* Display Dropdowns on Hover */
nav ul li:hover > ul, nav a {
	display:inherit;
  padding:14px 30px;
  z-index: 100; 
  
}


	
/* Fisrt Tier Dropdown */
nav ul ul li {
	width:150px;
	float:none;
	display:block;
	position: relative;
}



	


/* Media Queries
--------------------------------------------- */

@media all and (max-width : 768px) {
  nav a {
	display:block;
	padding:14px 30px;	
	color:#FFF;
	font-size:17px;
	text-decoration:none;
}



	#logo {
		display: block;
		padding: 0;
		width: 100%;
		text-align: center;
		float: left;
	}

	nav {
		margin: 0;
	}

	/* Hide the navigation menu by default */
	/* Also hide the  */
	.toggle + a,
	.menu {
		display: none;
	}

	/* Stylinf the toggle lable */
	.toggle {
		display: block;
		color:#FFF;
		font-size:45px;
		text-decoration:none;
		border:none;
    width: 15%;
    cursor:pointer;
    margin: auto;
	}

	

	/* Display Dropdown when clicked on Parent Lable */
	[id^=drop]:checked + ul {
		display: block;
	}

	/* Change menu item's width to 100% */
	nav ul li {
		display: block;
		width: 100%;
		}

	nav ul ul .toggle,
	nav ul ul a {
		padding: 0 40px;
	}

	nav ul ul ul a {
		padding: 0 80px;
	}

	
  
	nav ul li ul li .toggle,
	nav ul ul a,
  nav ul ul ul a{
		padding:14px 20px;	
		color:#FFF;
		font-size:17px; 
	}
  
  
	nav ul li ul li .toggle,
	nav ul ul a {
		background-color: #525252; 
	}

	/* Hide Dropdowns by Default */
	nav ul ul {
		float: none;
		position:static;
		color: #ffffff;
		/* has to be the same number as the "line-height" of "nav a" */
	}
		
	/* Hide menus on hover */
	nav ul ul li:hover > ul,
	nav ul li:hover > ul {
    width:150px;
	float:none;
	display:block;
	position: relative;
	}
		
	/* Fisrt Tier Dropdown */
	nav ul ul li {
		display: block;
		width: 100%;
	}

	nav ul ul ul li {
		position: static;
		/* has to be the same number as the "width" of "nav ul ul li" */ 

	}

  .btn2{
      color: black;
      display: block;
      text-decoration: none;
      float: left;
      font-family: Verdana;
      font-size: larger;
      list-style-type:none;
      margin-left: 10rem;
      
    }

}

@media all and (max-width : 330px) {

	nav ul li {
		display:block;
		width: 94%;
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
      margin-left: 15rem;
      margin-top: 1rem;
      margin-bottom: 3rem;
      margin-top: 1rem;
    }

    
    

  </style>

</head>

<body>

 
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */

// Close the dropdown if the user clicks outside of it

</script>

    
    
      <!-- <a class="navbar-brand" href="index.php">
        <img src="images/logo_transparent.png" width="100" height="100" alt="">
      </a> -->
     

      <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item1">
            <a class="nav-link1" href="index.php">Home </a>
          </li>
          <li class="nav-item1">
            <a class="nav-link1" href=" registration.php">Registration </a>
          </li>

          <li class="nav-item1">
            <a class="nav-link1" href="#">Services</a>
          </li>

          <li class="nav-item1">
            <a class="nav-link1" href="#">Testimonials</a>
          </li>

          <li class="nav-item1">
            <a class="nav-link1" href="contactUs.php">Contact</a>
          </li>

          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</ul> -->
  
  
     <div class="nv">  
    <nav>
    <div id="logo">
              <a class="navbar-brand" href="index.php">
                <img src="images/logo_transparent.png" width="100" height="100" alt="">
              </a>
          
        </div>
          
        <label  href="javascript:void(0);"  for="drop" class="toggle">≡</label> 
        <input type="checkbox" id="drop" />
        
            <ul class="menu">
  
                <li><a href="index.php">Home</a></li>
                <li> <a class="nav-link1" href=" registration.php">Registration </a></li>
                <li> <a class="nav-link1" href="#">Services</a></li>
                <li> <a class="nav-link1" href="#">Testimonials</a></li>
                <li> <a class="nav-link1" href="contactUs.php">Contact</a></li>
                
 
            <?php
            // if admin is logged in then give access to the following part of navbar
            if(isset($_SESSION['Admin']))
            {
              ?>
          
          <div class="btn2">
                   <li>

                    <!-- First Tier Drop Down -->
                    <label for="drop-22" class="toggle1"></label>
                    <a class="btn btn-danger" href="#">Admin Acoount</a>
                    
                    <ul>
                        <li><a href="AdminPages/adminDashboard.php">Admin DashBoard</a></li>
                        
                        <li><a href="#">Edit Home Page</a></li>
                        <li><a href="#">Edit Registration</a></li>
                        <li><a href="#">Edit DayDetails</a></li>
                        <li><a href="#">Manage Testimonials</a></li>
                        <li><a href="#">Manage Contact</a></li>
                        <li><a class="nav-link-Admin" href="logout.php">Log Out</a></li>
                        
                          
                      
                    </ul>
                    </li>


         

          </div>
        
         

        <?php
            }
            // if user is logged in then give access to the following part of navbar
            elseif(isset($_SESSION['User']))
            {
          ?>

         
              <!-- Example single danger button 
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
                -->

        <?php
            }
        else
        {
          ?>

         <!-- <div class="btn2">
          <a type="button" href="registration.php" id="btn" class="btn btn-danger">Sign Up</a>
          
          <a href="login.php" type="button" id="btn" class="btn btn-warning">Log In</a>
        </div>  -->

        <div class="btn2">
                   <li>

                    <!-- First Tier Drop Down -->
                    <label for="drop-2" class="toggle1"></label>
                    <a class="btn btn-danger" href="#">Menu</a>
                    
                 <ul>    
                   <li> <a  href="registration.php" >Sign Up</a></li>
                   <li><a href="login.php" >Log In</a></li>
                </ul>
                </li>

          </div>
          <?php
        }

?>
            </ul>

</nav>
     </div>
     
     
   

     
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>