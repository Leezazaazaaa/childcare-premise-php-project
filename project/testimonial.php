
<style>
    /* .testi{
       background-color:beige;
       width: 60%;
       margin: auto;
       font-weight: bold;
       font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
    }

    @media only screen and (max-width: 700px) {
        .testi{
            width: 90%;
            margin: auto;
        }
        
    } */
</style>

<?php
   

    // calling connection 
    require('/home/s3022041/sqlC/dbConnect.php');
    include "header.php";
   
    // qeury to select * from contact us table
    $query = "SELECT * FROM testimonial";
    $result = mysqli_query($connection, $query);

    // if query successfull 
    if($result)
    {
        echo '<div class="testi p-2 mt-2 rounded-top border border-dark bd-highlight">
        <h2>List of all Testimonials</h2>
            </div>
            <br>';
            
        

        //getting all messages from database and displaying them
        while($row = mysqli_fetch_array($result)){									
            echo "<h4 class='testi p-2 rounded-top border border-dark bd-highlight'> Testimonial: " . $row['testimonial_id'] . "</h4>";
            
            echo '<div class="testi border border-bottom border-dark rounded-bottom p-2 bd-highlight">
            <p>Service name: ' . $row['service_Name'] . '</p>
            <p>Parent name: ' . $row['parent_name'] . '</p>
            <p>Date: ' . $row['testi_date'] . '</p>
            <p>Message: "' . $row['comment'] . '"</p>
        </div>';
    echo "<br>";						
}

}


?>

<?php
include "footer.html";
?>