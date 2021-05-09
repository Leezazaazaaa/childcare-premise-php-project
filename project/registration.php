<?php
include "header.php";
?>
  <?php
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
              if($_POST['Day']=="fullDay"){  //to get the number of days chosen from drop down menu inside show and hide function
            		$time = $_POST["time1"];
            	}
              elseif ($_POST['Day']=="halfDay") {
            		$time = $_POST["time2"];
            	}
              else{
              }
              //checking if any of the values are empty
              if(empty($_POST['babyType'])){
            		$errors[] = "Baby type is required";
            	}
              if(empty($_POST['Day'])){
            		$errors[] = "Full day or Half Day type is required";
            	}
              if(empty($time)){
                $errors[] = "Number of days is required";
              }
              if(empty($_POST['userName'])){
            		$errors[] = "User Name is required";
            	}
              if(empty($_POST['email'])){
            		$errors[] = "Email is required";
            	}
              else {
                $email = trim($_POST['email']);
                $regex = '/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)@[a-z0-9-]+(\.[a-z0-9-]+)(\.[a-z]{2,3})$/';
                if (!preg_match($regex , $email)) { //matching the pattern
                    $errors[] = "Invalid Email Address";
              }
              }
              if(empty($_POST['password'])){
            		$errors[] = "Password is required";
            	}

              if (empty($errors)) { //when there is zero errors
                require "includes/mysql_connect.php";
                // echo "File added Successfully";
                if (isset($_POST['add'])){
                  function validate($data){ //to minimize the error while entering value by the user
          				      $data = trim($data);
          				      $data = stripslashes($data);
          				      $data = htmlspecialchars($data);
          				      return $data;
          			    }
                if($_POST['Day']=="fullDay"){  //to get the number of days chosen from drop down menu inside show and hide function
              		$time = $_POST["time1"];
              	}
                elseif ($_POST['Day']=="halfDay") {
              		$time = $_POST["time2"];
              	}
                else{
                }
                $babyType = validate($_POST['babyType']);
            		$day = validate($_POST['Day']);
           	 		$userName = validate($_POST['userName']);
                $email = validate($_POST['email']);
                $password = validate($_POST['password']);


                $to = 'thumamahahmed50@gmail.com, Leezapoudel01@gmail.com ' .$Email;
                $subject = 'Registration Confirmation';
                $message = 'Hi ' .$Name. ', '  . "\r\n" . 'Thank you for registration with kiddies Cove.
                will follow up shortly.
                you have chosen to register for ' . $time . ' , ' .  $babyType . ' , ' . $day . ' , ' . $time . '
                your login details are the following :
                username : ' .  $userName . '
                Password : ' . $password . '
                  '  . "\r\n" . '
                Regards,
                Kiddies Cove Head.';
                $message = wordwrap($message, 70);
                $headers = 'From: KiddiesCove@gmail.com' . "\r\n" . 'Reply-To: KiddiesCove@gmail.com' .
                "\r\n". 'X-Mailer: PHP/' . phpversion();
                // send
                mail($to, $subject, $message, $headers);

                $query = "SELECT * FROM child WHERE Email = '$email'"; //query to check if the email exsits in the table
          			$result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0) //if exists this will be executed
           	 		{
           	 			echo "Data Exists";
           	 		}
                else{
                  $query1 = "INSERT INTO `child` (`Category`, `Day`, `Fee`, `UserName`, `Email`, `Password`) VALUES ('$babyType', '$day', '$time', '$userName', '$email', '$password');";
                  $insert_result = mysqli_query($conn, $query1);
                  if ($insert_result) {
                    echo "Child added Sucessfully";
                  }else{
                    echo "error";
                    echo mysqli_connect_error($insert_result);
                  }
                }

              }
        }
      }
        else{ //printing out the errors if the value are not valid
          foreach ($errors as $msg) {
            echo "- $msg <br/>";
          }
        }

  ?>

  <!doctype html>
  <html lang="en">
    <head>
    <link rel="icon" type="image/png" href="images/logo_transparent.png"/>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <!-- <!- Bootstrap CSS --> -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

      <link rel="stylesheet" href="Mystyle.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    </head>
    <body>
      <div id="container2" class="container py-5">
        	<form id = "myform" action="registration.php" method="POST" class="main-form"> <!--//form created -->
            <h1> Child Registration Form </h1>
            <p> Choose the category of your Child </p>
            <select name = "babyType" id="babyType"  class="form-control"> <!--//drop down menu for the baby type-->
                 <option value = "">--Select Baby Type--</option>
                 <option value = "baby"> Baby</option>
                 <option value = "wobbler"> Wobbler </option>
                 <option value = "toddler"> Toddler </option>
                 <option value = "preschool"> Preschool </option>
              </select>

              <p> Choose the length of the day and the number of days </p>
              <input type = "radio" name = "Day" id = "type1" required = "input" value = "fullDay" onclick="func();" />  <!--//radio button to chose full day -->
              <label for ="kid1"> Full day </label>
              <fieldset id = "dayCareInfo1" class="reg-option">
              <select name = "time1" id="time1" style="display:none" class="form-control">  <!--//drop down menu for number of days-->
  			           <option value = "">--Select Number of Days--</option>
  			           <option value = "49"> 1 day ($49)</option>
  			           <option value = "147"> 3 days ($147) </option>
                   <option value = "245"> 5 days ($245) </option>
                </select>
              </fieldset>

                <br>
                <input type = "radio" name = "Day" id = "type2" required = "input" value = "halfDay" onclick="func();" /> <!-- //radio button for half day-->
                <label for ="kid2"> Half day </label>
                <fieldset id = "dayCareInfo2" class="reg-option">
                <select name = "time2" id="time2" style="display:none" class="form-control"><!--  //drop down menu for number of days-->
    			           <option value = "">--Select Number of Days--</option>
                     <option value = "30"> 1 day ($30)</option>
    			           <option value = "90"> 3 days ($90) </option>
                     <option value = "150"> 5 days ($150) </option>
                  </select>
                </fieldset>

                <br>
                UserName: <input type = "text" name = "userName" required="input"  value="" class="form-control"/> <!-- //field to enter user name-->
                Email: <input type = "email" name = "email" required="input"  value=""  class="form-control"/> <!-- //field to enter email -->
                Password: <input type = "password" name = "password" required="input"  value=""  class="form-control"/> <!-- //field to enter password -->

                <button type = "add" name="add" class="btn btn-primary"> Submit </button> <!-- //submit button -->
                </form>
            </div>

 <?php
   include "footer.html"
 ?>
 <script src="script.js"></script>

</body>
</html>
