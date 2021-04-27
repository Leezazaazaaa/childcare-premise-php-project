<?php
session_start();
require('/home/s3022041/sqlC/dbConnect.php'); 
$message = "";
$role = "";
if(isset($_POST["btnLogin"]))
{
        
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user WHERE username = '$username' AND password='$password'";

    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            if($row["role"] == "user") //|| ($row["role"] == "admin"))
            {
                $_SESSION['User'] = $row["username"];
                $_SESSION['Role'] == $row["role"];
                
                // redirecting to home page after 5 seconds..
                header( "refresh:5;url=index.php" );
                $text = "<h4>Welcome {$_SESSION['User']}</h4>";
                $text1 = "<h4>welcome to kiddies,</h4>";
                $text2 = "<h5>you'll be redirected in 5 seconds...</h5>";
            }
            elseif($row["role"] == "admin")
            {
                 $_SESSION['Admin'] = $row["username"];
                 $_SESSION['Role'] == $row["role"];
                
                //redirecting to home page after 5 seconds..
                header( "refresh:5;url=index.php" );
                $text = "<h4>Welcome {$_SESSION['User']}</h4>";
                $text1 = "<h4>welcome to kiddies,</h4>";
                $text2 = "<h5>you'll be redirected in 5 seconds...</h5>";
            }
            
            
        }
    }
    else
    {
        $message = "invalid username or password";
        header("location : loginn.php");
    }
}

?>


<?php

include "header.php";
?>
<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" type="image/png" href="images/logo_transparent.png"/>
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="Mystyle.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <style>
         .card{
            padding: 2rem;
            
        } 

          .global-container{
            margin-top: 10rem;
            margin-bottom: 5rem;
        }

        .welcome{
            padding: 3rem;
            background-color: white;
            color: black;
            font-weight: bold;
            font-family: 'Cherry Swash';
            font-size: 15rem;
        } 
    </style>
    
  </head>
  <body>

    <div class="container"> 
                    <div class="col-12 col-md-6">

                   

                         <div class="global-container">

                       

                    <?php
                    if((isset($_SESSION['Admin'])) || (isset($_SESSION['User'])))
                    {
                        echo "<div class='welcome'>$text";
                        echo "$text1";
                        echo  "$text2</div>";
                    }
                    else
                    {
                        ?>
                            <div class="card login-form">
                                <div class="card-body">
                                    <h3 class="card-title text-center">Log in to Kiddies Cove</h3>
                                        <div class="card-text">
                                        <!--
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                                        <form method="POST" action="login.php">
                                            <!-- to error: add class "has-danger" -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="username" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                
                                                <input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1">
                                            </div>
                                            
                                            <button type="submit" name="btnLogin" class="btn btn-primary btn-block">Sign in</button>

                                            <div class="sign-up">
                                                Don't have an account? <a href="#">Create One</a>
                                            </div>

                                        </form>
                                        <?php
                    }
                    ?>
                                 </div>
                    </div>
                </div>
            </div>
        </div>
     </div>







            <?php
              include "footer.html"
            ?>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  </body>
</html>