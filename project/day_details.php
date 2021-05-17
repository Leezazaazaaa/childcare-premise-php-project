<?php
require('/home/s3022041/sqlC/dbConnect.php'); 
session_start();
if(!isset($_SESSION['User'])){
	header("Location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "header.php";
    ?>
    <?php

    if(isset($_POST['search']))
    {
        $date=$_POST['date'];
        
            $query = "SELECT * FROM day where date = '$date' and name= '{$_SESSION['childName']}'";
         // $query = "SELECT * FROM day where date = '$date'";
         $query1 = mysqli_query($connection, $query);
            echo $query;
         
        //     if (($_SESSION['Role']=="Admin"))  {
        //     $query = "SELECT * FROM day";
        //     $query1 = mysqli_query($connection, $query);
            
        // }
    }
         // exequting query
?>


    <div id="container2" class="container py-5 col-12 col-md-6">
        <form id="myform" action="day_details.php" method="POST" class="main-form">
            <?php echo "<h4>Welcome {$_SESSION['User']}</h4>"; ?>
            <?php echo "<h1>  Know what {$_SESSION['childName']} did on a specific date</h1>"; ?>
            <input id="date" type='date' name="date" required="input" value="" min='1899-01-01' max='2000-13-13'>
            <button type="submit" name="search" class="btn btn-primary"> Search </button>
            <?php echo $query; 
            echo mysqli_error($connection);
            ?>

        </form>
    </div>
    <div class="tabl">
        <table class="table table-success table-striped" class="table-responsive">
            <thead>
                <tr>

                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Temperature (°C)</th>
                    <th scope="col">Breakfast</th>
                    <th scope="col">Lunch</th>
                    <th scope="col">Activities</th>


                </tr>
            </thead>

            <?php
                  if ($query1) {
                      foreach ($query1 as $row) {  // for each looping through the records
                  ?>

            <tbody>
                <tr>
                    <td> <?php echo $row['date']; ?>
                    </td>
                    <td> <?php echo $row['name']; ?> </td>
                    <td> <?php echo $row['temperature']; ?> </td>
                    <td> <?php echo $row['breakfast']; ?> </td>
                    <td> <?php echo $row['lunch']; ?> </td>
                    <td> <?php echo $row['activities']; ?> </td>




                </tr>

            </tbody>

            <?php
                      }
                  } else {
                      echo "no record found"; // if no record found
                  }
                  ?>

        </table>
    </div>
    <?php
    include "footer.html";
    ?>
</body>
<script>
function showSearch() {
    var x = document.getElementById("searched");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();
if (dd < 10) {
    dd = '0' + dd
}
if (mm < 10) {
    mm = '0' + mm
}

todayMin = yyyy + '-' + mm + '-' + (dd - 2);
todayMax = yyyy + '-' + mm + '-' + (dd - 1);
document.getElementById("date").setAttribute("max", todayMax);
document.getElementById("date").setAttribute("min", todayMin);
</script>

</html>