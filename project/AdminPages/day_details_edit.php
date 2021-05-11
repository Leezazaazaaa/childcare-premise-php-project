<?php
    session_start();
    if(!isset($_SESSION['Admin'])){
        header("Location: ../login.php");
}
    include "sidebar.php";
?>

<?php
// calling connection
require('/home/s3022041/sqlC/dbConnect.php');


        // checking if requested method is post
        if($_SERVER['REQUEST_METHOD']=="POST"){

        // creating array to store errors
        $error = false;

        // checking if service name is empty
        if (empty($_POST['date'])) {
            $error= true;
            $msg[] = "date is required";
            } else {
            $date = trim($_POST['date']);
            if (!preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $date)) {
            $msg[] = 'Invalid date! use only date format dd/mm/yyyy';
            }
            }

        // checking if name is empty
        if(empty($_POST['name'])){
        $error= true;
        $msg[] = "name is required";
        }
        else{
        // triming the name
        $name = trim($_POST['name']);
        }
        // checking if user has entered the correct pattern for the name
        if(!preg_match("/^[a-zA-Z ]+$/", $name)){
        $msg[] = "invalid input, use only letters for name";
        }

        // checking if name is empty
        if(empty($_POST['temperature'])){
            $error= true;
            $msg[] = "temperature is required";
            }
            else{
            // triming the name
            $temperature = trim($_POST['temperature']);
            }
            // checking if user has entered the correct pattern for the name
            if(!preg_match("/^[a-zA-Z 0-9 ]+$/", $temperature)){
            $msg[] = "invalid input, use only letters for temperature";
            }

        

        // checking if name is empty
        if(empty($_POST['breakfast'])){
            $error= true;
            $msg[] = "breakfast is required";
            }
            else{
            // triming the name
            $breakfast = trim($_POST['breakfast']);
            }
            // checking if user has entered the correct pattern for the name
            if(!preg_match("/^[a-zA-Z ]+$/", $breakfast)){
            $msg[] = "invalid input, use only letters for breakfast";
            }

        // checking if name is empty
        if(empty($_POST['lunch'])){
            $error= true;
            $msg[] = "lunch is required";
            }
            else{
            // triming the name
            $lunch = trim($_POST['lunch']);
            }
            // checking if user has entered the correct pattern for the name
            if(!preg_match("/^[a-zA-Z ]+$/", $lunch)){
            $msg[] = "invalid input, use only letters for lunch";
            }

            // checking if name is empty
        if(empty($_POST['activities'])){
            $error= true;
            $msg[] = "activities is required";
            }
            else{
            // triming the name
            $activities = trim($_POST['activities']);
            }
            // checking if user has entered the correct pattern for the name
            if(!preg_match("/^[a-zA-Z ]+$/", $activities)){
            $msg[] = "invalid input, use only letters for activities";
            }

        if (empty($error)) { // if no errors process input
        //stripping possible html inputs
        $date = htmlentities($date);
        $name = htmlentities($name);
        $temperature = htmlentities($temperature);
        $breakfast = htmlentities($breakfast);
        $lunch = htmlentities($lunch);
        $activities = htmlentities($activities);

        // adding details to the database


        $query = "INSERT INTO day(date, name, temperature, breakfast, lunch, activities) 
        VALUES('$date', '$name', '$temperature', '$breakfast', '$lunch', '$activities')";
        $result = mysqli_query($connection, $query);
        // cheking if there are any errors
        $error = mysqli_error($connection);



        // if query successfull
        if($result){
        echo '<div class="succes-msg col-12 col-md-6">
            <h4> Details Added successfully </h4>

        </div>';



        }
        else{

        echo '<div class="succes-msg col-12 col-md-6">
            <h4>Details Not Added </h4>

        </div>
        ';
        echo $query;
        echo $error;

        }
        }


        else{
        $msg[] = "invalid details";
        // foreach($errors as $newError){
        // echo "<h1>$newError</h1>";
        // }
        }
        }
        ?>


<div id="container2" class="container py-5 col-12 col-md-6">
    <form action="day_details_edit.php" method="POST">

        <?php
        // priting errors
        if(isset($msg)){
            foreach($msg as $err){  // looping through errors
                echo "<h4><strong style='color:red;'>$err</strong></h4>"."<br>";
        }
    }
        ?>


        <h2> Add Details </h2>
        <br>

        <div class="form-group">
            <label for="formGroupExampleInput">Date</label>
            <input type="date" class="form-control" name="date" id="formGroupExampleInput" placeholder="Date">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Temperature</label>
            <input type="text" class="form-control" name="temperature" id="formGroupExampleInput" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Breakfast</label>
            <input type="text" class="form-control" name="breakfast" id="formGroupExampleInput" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Lunch</label>
            <input type="text" class="form-control" name="lunch" id="formGroupExampleInput" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Activities</label>
            <input type="text" class="form-control" name="activities" id="formGroupExampleInput" placeholder="Name">
        </div>

        <button type="submit" class="btn btn-primary">Add Details</button>
    </form>
</div>
<?php

?>
