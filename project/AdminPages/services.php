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
    <?php

    include "header.php";
    ?>



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
                        <a href="bus.php" class="btn btn-primary">Know more about it</a>
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
                        <a href="supervision.php" class="btn btn-primary">Our Educators</a>
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
                        <a href="skill.php" class="btn btn-primary">Info about Social Skills</a>
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
                        <a href="day_details.php" class="btn btn-primary">Know what your kid did at school</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="images/lunch.jpg" style="height: 305px;" alt="Children eating">
                    <div class="card-body">
                        <h5 class="card-title">Lunch Service</h5>
                        <p class="card-text">Children will eat at happily at the center</p>
                        <a href="lunch.php" class="btn btn-primary">Know more about it</a>
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
                            <a href="bed.php" class="btn btn-primary">Know more about it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
 <!--  <script>
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
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
    </script> -->
</body>

</html>