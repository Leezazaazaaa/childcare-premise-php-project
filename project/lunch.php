
<!doctype html>
<html lang="en">
<?php
    session_start();
    if(!isset($_SESSION['User'])){
        header("Location: login.php");
}
?>
<head>
    <link rel="icon" type="image/png" href="images/logo_transparent.png" />
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="Mystyle1.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>


<body>
    <?php

    include "header.php";
    ?>



    <div class="container">
        <header>
            <div id="serviceCard" class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 id="card-title1" class="card-title">Bus Service</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </header>


        <div class="container" style="background-color: red;">
            <div class="col-xs-12 col-sm-7 col-md-8 pull-right">
                <div class="content">
                    <h1 class="page-title"> Day Details</h1>
                    <hr> <img width="600" height="200" src="images/educator.jfif" class="img-responsive img-rounded wp-post-image" alt="">
                    <h2>(6 months to 1 year)</h2>
                    <h3>We understand that choosing a childcare provider can be an emotional and at times difficult step for new parents.</h3>
                    <p>At Giraffe we work together with parents over a settling in period of a few days to ensure that your child is happy and comfortable in their new surroundings. During this period, as your child settles in and establishes a bond with their key carer and gains confidence, we learn about your child’s daily routine, their mealtimes, sleeping patterns and all the other little things special to your child. In our experience, it takes about 3-5 days to settle your child but every child is different so we always work with you to make this as smooth as possible for both you and your child.</p>
                    <p>Our open door policy means you’re always welcome to drop in and spend some time with your child. We’ll give you daily feedback on your child’s day and we keep written diaries that keep track your child’s day and detail any other information that’s helpful. Our baby rooms are cosy and intimate, with a 3:1 ratio and extra lunchtime cover to help us out at busy mealtimes! We will support your child with weaning and will introduce different tastes and textures and our on-site cook will be happy to chat with you about your child’s dietary requirements.</p>
                    <p>In our baby rooms, we are developing your child’s sense of self and there is constant interaction between the carers and the children to encourage their natural curiosity. The environment is safe, stimulating and nurturing to foster your child’s love of learning as they discover the world around them. Our black and white areas are designed to create a stimulating yet comforting environment for babies which will captivate and hold your child’s attention, encouraging visual development as well as physical activity.</p>
                    <p>Babies also enjoy tummy time, tickle time, garden time, music and heuristic play and if your child has an older brother or sister in our crèche, they will have family time together every day!</p>
                    <p>For more information, please call us on <strong>(01) 2450935.</strong></p>
                </div>
            </div>
        </div>



    <?php
    include "footer.html";
    ?>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>