<?php
include "header.php";
?>
<!doctype html>
<html lang="en">

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

    

    <div class="container">
     <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <header>
            <div id="serviceCard" class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 id="card-title1" class="card-title">Our Services and Facilitation</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </header>
        <div class="row">

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="images/bus.jpg" style="height: 216PX;" alt="School bus">
                    <div class="card-body">
                        <h5 class="card-title">School Transportation</h5>
                        <p class="card-text">Area transportation is a must for any daycare center.
                            This includes before and after school dropoffs and pickups.
                            This is a service that will save you both time and money.</p>
                        <a href="bus.php" class="btn btn-primary">Check your kid's bus time</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="images/educator.jfif" alt="Children educator">
                    <div class="card-body">
                        <h5 class="card-title">Trained Supervision</h5>
                        <p class="card-text">No matter how old your children are it is integral that they are left in the hands of qualified adults
                            who will be able to care for them in all sorts of situations.
                            At Kiddies Cove we have a selected team that is first aid certified and MAT certified</p>
                        <a href="#supervisior" class="btn btn-primary" onclick="showEdu()">Our Educators</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="images/peer.jpg" style="height: 145px;" alt="Children in a peer">
                    <div class="card-body">
                        <h5 class="card-title">Social Skill Promotion</h5>
                        <p class="card-text">One of the most important ways that children learn is through interaction with each other.
                            Our daycare center encourage children to play, grow and learn togheter. You will soon notice yout child's
                            social behaviour growing when they are placed in a friendly environment.</p>
                        <a href="#social" class="btn btn-primary" onclick="showSkill()">Info about Social Skills</a>
                    </div>
                </div>
            </div>

        </div>

        <br>

        <div class="row">

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="images/childday.png" style="height: 257px;" alt="Child's day">
                    <div class="card-body">
                        <h5 class="card-title">Playtime</h5>
                        <p class="card-text">Get to know your children's day, what's he/she gonna eat,
                            what are the activities planned for today</p>
                        <a href="#" class="btn btn-primary">Know today's activities</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="images/lunch.jpg" style="height: 305px;" alt="Children eating">
                    <div class="card-body">
                        <h5 class="card-title">Lunch Service</h5>
                        <p class="card-text">Know the weekly lunch menu</p>
                        <a href="#" class="btn btn-primary">Lunch menu</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="images/bed.jpg" style="height: 208px;" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Evening sleeping bed</h5>
                        <p class="card-text">Ensuring children have enough sleep is as important as
                            feeding them healthy food and ensuring they receive plenty of fresh air and exercise.</p>
                        <a href="#" class="btn btn-primary">Know more about it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="supervisior" style="display: none;">
        <div class="container" style="background-color: red;">
            <div class="col-xs-12 col-sm-7 col-md-8 pull-right">
                <div class="content">
                    <h1 class="page-title"> Supervision</h1>
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
    </div>

    <div id="social" style="display:none">
        <div class="container" style="background-color: #BCA136;">
            <div class="col-xs-12 col-sm-7 col-md-8 pull-right">
                <div class="content">
                    <h1 class="page-title"> Supervision</h1>
                    <hr> <img width="600" height="200" src="images/peer.jpg" class="img-responsive img-rounded wp-post-image" alt="">
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
    </div>





    <?php
    include "footer.html";
    ?>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script>
        function showEdu() {
            var x = document.getElementById("supervisior");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function showSkill() {
            var x = document.getElementById("social");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 600|| document.documentElement.scrollTop > 600) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 240;
            document.documentElement.scrollTop = 240;
        }
    </script>
</body>

</html>