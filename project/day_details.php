<?php
    session_start();
    if(!isset($_SESSION['User'])){
        header("Location: login.php");
}
    include "header.php";
?>

<style>
#container-day {
    background-color: none;
    margin-top: 3rem;
    margin-bottom: 5rem;
    padding: 2rem;
    color: black;
    font-weight: bold;
}
</style>


<?php
          require('/home/s3022041/sqlC/dbConnect.php'); // sql connection
            // displaying all the records that exist in the database
          $query = "select * from day";    // select all query
          $query = mysqli_query($connection, $query); // exequting query
          ?>
<div id="container-day" class="container py-5 col-12 col-md-9">
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
                  if ($query) {
                      foreach ($query as $row) {  // for each looping through the records
                  ?>

            <tbody>
                <tr>
                    <td> <?php echo $row['date']; ?> </td>
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
</div>

<?php

    include "footer.html";
    ?>