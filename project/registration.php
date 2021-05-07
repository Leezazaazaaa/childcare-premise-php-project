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
      <form action ="registration.php" method="post">
        <h1> Child Registration Form </h1>
        <input type ="radio" name = "care" id="type1" required="input" value="type1" onclick="func();" />
        <label for ="kid1"> Baby </label>
        <fieldset id = "dayCareInfo1" class="reg-option">
          <input type ="radio" name = "catagory" id="fullDay1" class="day-field" style="display:none" required="input" onclick="func();" />
          <label style="display:none" id="fullday1" for ="fullDay1"> Full Day </label>
          <div id="fullDay1-option" class="day-option" style="display:none">
		        <select name = "time1" id="time1" style="display:none" class="form-control">
			           <option value = "">--Select Days--</option>
			           <option value = "1 day"> 1 day</option>
			           <option value = "3 days"> 3 days </option>
                 <option value = "5 days"> 5 days </option>
              </select>
          </div>
      <input type ="radio" name = "catagory" id="halfDay1" class="day-field" style="display:none" required="input" onclick="func();" />
      <label style="display:none" id="halfday1" for ="halfDay1"> Half Day </label>
      <div id="halfDay1-option" class="day-option" style="display:none">
		  <select name = "time2" id="time2" style="display:none" class="form-control">
        <option value = "">--Select Days--</option>
        <option value = "1 day"> 1 day</option>
        <option value = "3 days"> 3 days </option>
        <option value = "5 days"> 5 days </option>
      </select>
    </div>
</fieldset>

<input type ="radio" name = "care" id="type2" required="input" value="type2" onclick="func();"/>
<label for ="kid1"> Wobbler </label>
<fieldset id = "dayCareInfo2" class="reg-option">
 <input type ="radio" name = "catagory" id="fullDay2" style="display:none" required="input"/>
  <label style="display:none" id="fullday2" for ="fullDay2"> Full Day </label>
  <div style="display:none">
    <select name = "kdk" id="time3" style="display:none" class="form-control">
         <option value = "">--Select Days--</option>
         <option value = "1 day"> 1 day</option>
         <option value = "3 days"> 3 days </option>
         <option value = "5 days"> 5 days </option>
    </select>
  </div>
  <input type ="radio" name = "catagory" id="halfDay2" style="display:none" required="input"/>
  <label style="display:none" id="halfday2" for ="halfDay2"> Half Day </label>
  <div style="display:none">
    <select name = "kdk" id="time4" style="display:none" class="form-control">
      <option value = "">--Select Days--</option>
      <option value = "1 day"> 1 day</option>
      <option value = "3 days"> 3 days </option>
      <option value = "5 days"> 5 days </option>
    </select>
</div>
</fieldset>

<input type ="radio" name = "care" id="type3" required="input" value="type3" onclick="func();"/>
<label for ="kid1"> Toddler </label>
<fieldset id = "dayCareInfo3" class="reg-option">
 <input type ="radio" name = "catagory" id="fullDay3" style="display:none" required="input"/>
  <label style="display:none" id="fullday3" for ="fullDay3"> Full Day </label>
  <select name = "kdk" id="time5" style="display:none" class="form-control">
       <option value = "">--Select Days--</option>
       <option value = "1 day"> 1 day</option>
       <option value = "3 days"> 3 days </option>
       <option value = "5 days"> 5 days </option>
  </select>
  <input type ="radio" name = "catagory" id="halfDay3" style="display:none" required="input"/>
  <label style="display:none" id="halfday3" for ="halfDay3"> Half Day </label>
  <select name = "kdk" id="time6" style="display:none" class="form-control">
    <option value = "">--Select Days--</option>
    <option value = "1 day"> 1 day</option>
    <option value = "3 days"> 3 days </option>
    <option value = "5 days"> 5 days </option>
  </select>
</fieldset>

<input type ="radio" name = "care" id="type4" required="input" value="type4" onclick="func();" />
<label for ="kid1"> Preschool </label>
<fieldset id = "dayCareInfo4" class="reg-option">
 <input type ="radio" name = "catagory" id="fullDay4" style="display:none" required="input"/>
  <label style="display:none" id="fullday4" for ="fullDay4"> Full Day </label>
  <select name = "kdk" id="time7" style="display:none" class="form-control">
       <option value = "">--Select Days--</option>
       <option value = "1 day"> 1 day</option>
       <option value = "3 days"> 3 days </option>
       <option value = "5 days"> 5 days </option>
  </select>
  <input type ="radio" name = "catagory" id="halfDay4" style="display:none" required="input"/>
  <label style="display:none" id="halfday4" for ="halfDay4"> Half Day </label>
  <select name = "kdk" id="time8" style="display:none" class="form-control">
    <option value = "">--Select Days--</option>
    <option value = "1 day"> 1 day</option>
    <option value = "3 days"> 3 days </option>
    <option value = "5 days"> 5 days </option>
  </select>
</fieldset>

UserName: <input type = "text" name = "userName" required="input"  value="" class="form-control"/>
Email: <input type = "email" name = "email" required="input"  value=""  class="form-control"/>
Password: <input type = "password" name = "password" required="input"  value=""  class="form-control"/>

<button type = "submit" name="add" class="btn btn-primary"> Submit </button>
</form>
</div>

<?php
// $name= $_POST['userName'];
// echo "$name";
if(($_POST['care'] == "type1") && ($_POST['catagory'] == "fullDay1")){
    $time = $_POST['time1'] ;
// }elseif($_POST['care'] == "type1" && $_POST['catagory'] == "halfDay1"){
//   $time = $_POST['time2'] ;
// }elseif($_POST['care'] == "type2" && $_POST['catagory'] == "fullDay2"){
//   $time = $_POST['time3'] ;
// }elseif($_POST['care'] == "type2" && $_POST['catagory'] == "halfday2"){
//   $time = $_POST['time4'] ;
// }elseif($_POST['care'] == "type3" && $_POST['catagory'] == "fullDay3"){
//   $time = $_POST['time5'] ;
// }elseif($_POST['care'] == "type3" && $_POST['catagory'] == "halfDay3"){
//   $time = $_POST['time6'] ;
// }elseif($_POST['care'] == "type4" && $_POST['catagory'] == "fullDay4"){
//   $time = $_POST['time7'] ;
// }elseif($_POST['care'] == "type4" && $_POST['catagory'] == "halfDay4"){
//   $time = $_POST['time8'] ;
}else{
$time = $_POST['time2'] ;
}

echo "File added successfully";
$user = $_POST['userName'];

if (empty($_POST['care'] == "type1")) { //checking if the type is empty
  $errors[] = "Type of baby is required";
}

if (empty($_POST['catagory'] == "fullDay1")) { //checking if the type is empty
  $errors[] = "Catagory full time or part time is required";
}

if (empty($time)) { //checking if the time is empty
  $errors[] = "How many days in a week you want to register your child is required";
}

if (empty( $_POST['userName'])) { //checking if the user name is empty
  $errors[] = "Username is required";
}

if (empty( $_POST['email'])) { //checking if the email is empty
  $errors[] = "Username is required";
}else{
  $email = trim($_POST['email']);
  if (!preg_match('/^[a-zA-Z0-9]{17}$/', $email)) { //cheking if the email contains @ and .
    $errors[] = "Email must have @ and . in it";
  }
}

if (empty($_POST['password'])) { //checking if the password is empty
  $errors[] = "Password is required";
}

if($empty($errors)){

}


 ?>


<?php
 include "footer.php"
?>
</body>
</html>
