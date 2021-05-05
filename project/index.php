<?php
session_start();

$count="";
?>
<!doctype html>
<html lang="en">
  <head>
  <script src="script.js"></script>
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
      /* #container1{
        margin-top: 0rem;
} */
    </style>
    
  </head>
  <body>

        <?php
         
          include "header.php";
      ?>
  <header>
    <div id="container1" class="container py-5">
      <div class="">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
              <img src="images/child2.jpg" class="d-block w-100" alt="child2">
            </div>
            <div class="carousel-item" data-bs-interval="4000">
              <img src="images/child1.jpg" class="d-block w-100" alt="child1">

            </div>
            <div class="carousel-item" data-bs-interval="4000">
              <img src="images/child3.jpg" class="d-block w-100" alt="child3">
            </div>
          </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
    </div>
</div>
  </header>

  

  <div class="container">

  <div id="firstCard" class="card text-white bg-danger mb-3">
  <div class="card-body">
    <h5 id="card-title1" class="card-title">Award Winning Childcare in Dublin, Cork and other cities of Ireland</h5>
    <p class="card-text"></p>
  </div>
</div>
              
          <div class="row">

          <div class="col-sm-8"> 
              <div id="card-main" class="card">
                <div class="card-body">
                  <h3 id="basic-information-title" class="card-title">Kiddies Cove Dublin</h3>
                  <p id="basic-information" class="card-text">Our Liffey Valley crèche is located just off the N4 and M50 motorways beside Liffey Valley Shopping Centre,
                                    and en route from Meath, Kildare, and Lucan. Our purpose-designed crèche has a
                                    warm, homely feel and we have an open door for policy for parents and we hold
                                    a number of family events throughout the year.
                                    <br>
                                    <br>
                                    The crèche has 7 spacious rooms, all brightly decorated and arranged to offer each child the chance to explore and 
                                    investigate their environment and we have a wonderful activity street where the children enjoy their dancing and keep
                                    fit sessions! We offer a broad curriculum underpinned by Aistear and Siolta frameworks with a range of opportunities 
                                    for children to explore and learn through play and to become active learners.

                                    <br>
                                    <br>
                                    There is ample parking/set down to facilitate dropping off and collecting your child and we are open all year round 
                                    from 7.15am to 6.45pm, Monday to Friday except for public holidays. We offer part-time and full-time places for babies
                                     and children up to 5 years .
                                    </p>
                                    <a href="#" id="buttons" class="btn btn-lg">Join Us Now</a>
                </div>
              </div>
            </div>


            <div class="col-sm-4">
              <div id="card-main" class="card">
                <div class="card-body">
                  <h3 id="basic-information-title" class="card-title">Your Child's Day</h3>
                  <p id="basic-information1" class="card-text"> 
                  At Kiddies Cove, we understand that the first three years of your child’s
                  life lays the foundation for a lifetime.
                    <br>
                    <br>
                    <hr>
                    <h3 id="basic-information-title" class="card-title">Services And Facilities</h3>


                    <p id="basic-information1" class="card-text">
                    Our goal is to provide a safe and caring environment, where children can gain 
                    a positive approach to school and learning. They will learn to care for, and 
                    respect each other, whilst learning how to be part of a group. Good nursery 
                    education is crucial to a child’s formative years, and fosters an enthusiasm 
                    and confidence that will remain with them throughout their school life.
                    </p>

                    <h5 id="basic-information-title" class="card-title">
                      We Provide The Following Services..
                    </h5>

                    <P id="basic-information1" class="card-text">
                        <ul class="list-unstyled">
                              <li><a href="#">Service 1</a></li>
                              <li><a href="#">Service 2</a></li>
                              <li><a href="#">Service 3</a></li>
                              <li><a href="#">Service 4</a></li>
                              <li><a href="#">Service 5</a></li>
                        </ul>
                    </P>

                </div>
              </div>
            </div>

            

             
              

            
            <div class="row row-cols-1 row-cols-md-2 g-4">

            <?php
                require('/home/s3022041/sqlC/dbConnect.php');
                $query ="SELECT * FROM page ORDER BY or_no";
                $result = mysqli_query($connection, $query);
                if (($result)==1) {
                    $lastRow = mysqli_fetch_assoc($result);
                  }
          
                ?>

                  <div class="col">
                    <div class="card">
                      <img src="<?php echo($lastRow['image']) ?>" class="card-img-top" alt="pic5">
                      <div class="card-body">
                        <h5 id="basic-information-title1" class="card-title"><?php echo($lastRow['title']) ?></h5>
                        <p id="basic-information1" class="card-text">
                        <?php echo($lastRow['text']) ?>
                        <!-- Our after school care is full of fun stuff, Arts & Crafts, Games, Music, Dance, Computers and also the space to unwind and relax 
                        with their friends or siblings. We know that modern life can get pretty hectic, and for busy parents, Kiddies can offer the
                        flexibility to help out when you need extra support. For early morning starts we’ll provide a nutritious breakfast and can 
                        drop your child to school. We will also collect your child after school with a friendly face.
                        <br>
                        <br>
                          Our after school care is available
                          at selected Kiddies centres and we also run a fun summer club in the holidays for children up to 12 years. -->
                        </p>
                        <a href="<?php echo($lastRow['link']) ?>" id="buttons" class="btn btn-lg"><?php echo($lastRow['link_text']) ?></a>
                      </div>
                    </div>
                  </div>



                  <?php
                      $query ="SELECT * FROM page ORDER BY or_no DESC LIMIT 1,1";
                      $result = mysqli_query($connection, $query);
                      if (($result)==1) {
                          $secondRow = mysqli_fetch_assoc($result);
                        }
                   ?>


                  <div class="col">
                  <div class="card">
                    <img src="<?php echo($secondRow['image']) ?>" style="height: 360px;" class="card-img-top" alt="gif1">
                    <div class="card-body">
                      <h5 id="basic-information-title1" class="card-title"><?php echo($secondRow['title']) ?></h5>
                      <p id="basic-information1" class="card-text">
                      <?php echo($secondRow['text']) ?>
                      <!-- We aim to provide quality, affordable childcare to families.  We provide special discounts to families of 2 or more children 
                      availing of full time care. Please contact our accounts department for further details on our special family discount. At Links, 
                      we operate a sibling programme where we encourage children from families of two of more to spend valuable time together throughout 
                      the day. We understand how critically important the ‘sibling bond’ is at a young age.  The sibling relationship is one of the most 
                      important relationships in a child’s life. We believe that sibling time, can enhance a child’s sense of safety and well-being and
                      create a home-away-from-home environment within the crèche. If you wish to avail of our special family discount offer please
                      contact us at 1890 93 00 82. -->
                      </p>
                      <a href="<?php echo($secondRow['link']) ?>" id="buttons" class="btn btn-lg"><?php echo($secondRow['link_text']) ?></a>
                    </div>
                  </div>
                </div>  


                  

            </div>

            <?php
                      $query ="SELECT * FROM page ORDER BY or_no DESC LIMIT 3";
                      $result = mysqli_query($connection, $query);
                      if (($result)==1) {
                          $thirdBox = mysqli_fetch_assoc($result);
                        }
                   ?>

             <div id="last-info" class="row row-cols-1 row-cols-md-1 g-4">
                <div class="col">
                  <div class="card">
                    <img src="<?php echo($thirdBox['image']) ?>" class="card-img-top" alt="pic6">
                    <div class="card-body">
                      <h5 id="basic-information-title1" class="card-title"><?php echo($thirdBox['title']) ?></h5>
                      <p id="basic-information1" class="card-text">
                      <?php echo($thirdBox['text']) ?>
                      <!-- Each year a Graduation Ceremony is held for children graduating from our Early Childhood Care and Education (ECCE) classes.
                      Having spent several years in Links Childcare your child has embarked on their first steps on the road to developing as an
                       independent person. We believe it is important to recognise these very important steps by holding a Graduation Ceremony.
                       The graduation ceremony, marks another step in your child’s development as he/she transitions into ‘Big School’.  This event 
                       gives our pre-school graduates and opportunity to put on a show for their family and friends to display their confidence and 
                       skills which they have acquired during their time with us.
                       <br>
                       <br>
                       The graduation marks a very special occasion, it will possibly be the first of many graduation ceremonies which you will attend
                        with your child.  Each child receives their first educational parchment to mark their sense of achievement during their time at
                         Links Childcare.  The Ceremony celebrates children’s journey into “Big School” and gives them the opportunity to dress in their 
                         first cap and gown in front of their family and friends. -->
                      </p>
                      <a href="<?php echo($thirdBox['link']) ?>" id="buttons" class="btn btn-lg"><?php echo($thirdBox['link_text']) ?></a>
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