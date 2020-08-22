<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="name" content="width=device-width,initial-scale=1.0">
  <title>Suman Website</title>
  <!--CSS-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <!--Font Awasome-->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/css/mdb.min.css" rel="stylesheet">



</head>
<style>
  html,
  body,
  header,
  .view {
    height: 100%;
  }

  @media (max-width: 740px) {

    html,
    body,
    header,
    .view {
      height: 1000px;
    }
  }

  @media (min-width: 800px) and (max-width: 850px) {

    html,
    body,
    header,
    .view {
      height: 600px;
    }
  }

  .btn .fa {
    margin-left: 3px;
  }

  .top-nav-collapse {
    background-color: #6371BA !important;
  }

  .navbar:not(.top-nav-collapse) {
    background: transparent !important;
    background-color: black !important;
  }

  /*@media (max-width: 991px) {
   .navbar:not(.top-nav-collapse) {
    background:  #6371BA !important;
   }
  }
*/
  .btn-white {
    color: black !important;
  }

  h6 {
    line-height: 1.7;
  }

  .rgba-gradient {
    background: -moz-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
    background: -webkit-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
    background: -webkit-gradient(linear, 45deg, from(rgba(42, 27, 161, 0.7)), to(rgba(29, 210, 177, 0.7)));
    background: -o-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
    background: linear-gradient(to 45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
  }
</style>

<body onload="myFunction()">
  <div id="loading"></div>

  </div>
  <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <strong>WebFly</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link text-blue"> Home </a></li>
            <li class="nav-item active"><a href="#service" class="nav-link text-blue"> Service </a></li>
            <li class="nav-item active"><a href="#registration" class="nav-link text-blue"> Registration </a></li>
            <li class="nav-item active"><a href="Requester/RequesterLogin.php" class="nav-link text-blue"> Login </a></li>
            <li class="nav-item active"><a href="#contact" class="nav-link text-blue"> Contact Us </a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Full Page Intro -->
    <div class="view" style="background-image: url('images/9.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <!-- Mask & flexbox options-->
      <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
              <h1 class="h1-responsive font-weight-bold mt-sm-5" style="font-size: 55px;font-family:'Adamina';"> Welcome To WebFLy</h1>
              <hr class="hr-light">
              <h4 class="mb-4" style="font-family:'Adamina';">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciun dolorum nulla magnam veniam sapiente! Commodi sequi non animi ea dolor molestiae
                iste.</h4>
              <a class="btn btn-white btn-rounded" href="Requester/RequesterLogin.php">LOGIN</a>
              <a class="btn btn-outline-white btn-rounded">Learn more</a>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
              <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" alt="" class="img-fluid">
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Content -->
      </div>
      <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
  </header>
  </div>

  <!--Webfly Service-->

  <div class="container my-5 py-5 z-depth-1">


    <!--Section: Content-->
    <section class="text-center px-md-5 mx-md-5 dark-grey-text">

      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->

        <h3 class="text-center font-weight-bold" style="font-size: 40px;font-family:'Adamina';">WebFly Service</h3>

        <p style="font-family: 'Alice';font-size: 22px;">Brands we repair Sears Home Services is the leading appliance repair service in the nation. We repair most major appliance brands, makes and models, no matter where you bought them. Our goal is to provide quality repairs to help you extend the useful life of your household appliances.</p>


        <!--Grid column-->

      </div>
      <!--Grid row-->
    </section>
    <!--Section: Content-->
  </div>

  <div class="container text-center">


    <!--Section: Content-->
    <section class="text-center dark-grey-text">

      <!--Grid row-->
      <div class="row  justify-content-center">

        <!--Grid column-->
        <div class=" col-md-8">

          <h3 class="font-weight-bold" style="font-size: 40px;font-family:'Adamina';">Our Service</h3>

          <p class="text-muted" style="font-family: 'Alice';font-size: 22px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio.</p>

          <a class="btn btn-info btn-md ml-0 mb-5" href="#" role="button">Start now<i class="fa fa-magic ml-2"></i></a>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


      <!--Grid row-->
      <div class="row mt-4">
        <!--Second column-->
        <div class=" col-sm-4 mb-4">
          <i class="fas fa-tv fa-8x text-success"></i>
          <h4 class="mt-4" style="font-family: 'Alice';font-size: 35px;">Electronic Application</h4>
          <p class="text-muted" style="font-family: 'Alice';font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <!--/Second column-->

        <!--Third column-->
        <div class=" col-sm-4 mb-4">
          <i class="fas fa-sliders-h fa-8x text-primary"></i>
          <h4 class="mt-4" style="font-family: 'Alice';font-size: 35px;">Preventive Maintaintace</h4>
          <p class="text-muted" style="font-family: 'Alice';font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <!--/Third column-->

        <!--Fourth column-->
        <div class=" col-sm-4 mb-4">
          <i class="fas fa-cogs fa-8x text-info"></i>

          <h4 class="mt-4" style="font-family: 'Alice';font-size: 35px;">Fault Repair</h4>
          <p class="text-muted" style="font-family: 'Alice';font-size: 22px;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <!--/Fourth column-->

      </div>
      <!--/Grid row-->


    </section>
    <!--Section: Content-->


  </div>

  <!--strat Registration From --->
  <?php include('UserRegistration.php'); ?>
  <!--End Registration From -->
  </div>
  </div>
  </div>
  <div class="container mt-5">

    <h3 class="font-weight-bold mb-4 pb-2 text-center" style="font-size: 40px; font-family:'Adamina';">Happy Customer</h3>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto mb-5" style="font-family: 'Alice';font-size: 22px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
      eum porro a pariatur veniam.</p>

    <!--Grid row-->
    <div class="row text-center">

      <!--Grid column-->
      <div class="col-md-4 mb-4">

        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">Anna Deynah</h4>

          <p class="font-weight-normal dark-grey-text">
            <i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
            eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
          <!--Review-->
          <div class="orange-text">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star-half-alt"> </i>
          </div>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-4 mb-4">

        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">John Doe</h4>

          <p class="font-weight-normal dark-grey-text">
            <i class="fas fa-quote-left pr-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam
            corporis suscipit laboriosam, nisi ut aliquid commodi.</p>
          <!--Review-->
          <div class="orange-text">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
          </div>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-4 mb-4">

        <div class="testimonial">
          <!--Avatar-->
          <div class="avatar mx-auto">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle z-depth-1 img-fluid">
          </div>
          <!--Content-->
          <h4 class="font-weight-bold dark-grey-text mt-4">Maria Kate</h4>

          <p class="font-weight-normal dark-grey-text">
            <i class="fas fa-quote-left pr-2"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui
            blanditiis praesentium voluptatum deleniti atque corrupti.</p>
          <!--Review-->
          <div class="orange-text">
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="fas fa-star"> </i>
            <i class="far fa-star"> </i>
          </div>
        </div>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

    </section>
    <!--Section: Content-->


  </div>

  <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

    <style>
      .map-container {
        height: 230px;
        position: relative;
      }

      .map-container iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
      }
    </style>

    <!--Grid row-->
    <div class="row d-flex justify-content-center">

      <!--Grid column-->
      <div class="col-md-6 text-center">

        <h3 class="font-weight-bold mb-4 pb-2 " style="font-size: 40px;font-family:'Adamina';">Contact Us</h3>
        <p class="text-center w-responsive mx-auto mb-5" style="font-family: 'Alice';font-size: 22px;">Contact us pages are often the go-to for a new visitor on a mission. It’s where they go when they have a question and truly want to speak to an individual at your organization.</p>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">

        <!-- Material outline input -->
        <div class="md-form md-outline mt-3">
          <input type="email" id="form-email" class="form-control" placeholder="Email">

        </div>

        <!-- Material outline input -->
        <div class="md-form md-outline">
          <input type="text" id="form-subject" class="form-control" placeholder="Subject">

        </div>

        <!--Material textarea-->
        <div class="md-form md-outline mb-3">
          <textarea id="form-message" class="md-textarea form-control" rows="3" placeholder="How we can help?"></textarea>

        </div>

        <button type="submit" class="btn btn-info btn-sm ml-0">Submit<i class="far fa-paper-plane ml-2"></i></button>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-0 mb-md-0">

        <!--Google map-->
        <div id="map-container-google-1" class="z-depth-1 map-container mb-4">
          <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!--Google Maps-->

        <p class="font-weight-bold">Gandhi Nagar E-89 Haldia 721657</p>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->


  </section>
  <!--Section: Content-->


  </div>



  <footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
      <div class="row py-3">
        <div class="col-md-6">
          <span class="pr-2">Follow Us:</span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div>
        <div class="col-md-6 text-right">
          <small>Designed by Suman &copy;2020</small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>

        </div>
      </div>
  </footer>
  <script>
    var preloader = document.getElementById("loading");

    function myFunction() {
      preloader.style.display = 'none';
    };
  </script>

  <!--Java Script-->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
  <script src="js/amimations.js"></script>

</body>

</html>