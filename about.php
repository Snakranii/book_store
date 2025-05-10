<?php
include 'config.php';

session_start();
   $user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- custom css filr link -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="./assets/js/navbar.js"></script>
</head>
<body id="nav-togglebar">
  <?php include 'header.php'; ?>
  <?php include 'navbar.php'; ?>

  <!-- <section class="about_header">
        <p class="intro-title">About Us</p>
        <p> <a href="home.php">home</a> / contact </p>
  </section> -->
  <section class="introduction">
    <div class="container">
      <div class="row introduction-lining">
        <div class="col-md-6 col-sm-12">
          <img src="./assets/image/about.png" alt="image" class="img-fluid">
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="introduction-content">
              <h2 class="title">
                What We Are
              </h2>
              <p class="intro-description ">
              bookstore is the fastest way to compare book prices and buy books from online book sellers in India.
            </p>
            <p class="intro-description">
              bookstore is the fastest way to compare book prices and buy books from online book sellers in India.
            </p>
            <p class="intro-description">
              bookstore is the fastest way to compare book prices and buy books from online book sellers in India.
            </p>
            </div>
        </div>
      </div>
    </div>

  </section>

  <section class=" team">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="title">Our Team</h5>
            <h2 class="display-20 display-md-18 display-lg-16">Meet our master individuals</h2>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-4 mb-1-9 mb-lg-0">
                <div class="team-style1 hoverstyle1">
                    <div class="team-img">
                        <img src="./assets/image/p2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="team-social-icon">
                        <ul>
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h6 class="h5">Lena Christner</h6>
                        <small>Refractory Helper</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-1-9 mb-lg-0">
                <div class="team-style1 hoverstyle1">
                    <div class="team-img">
                        <img src="./assets/image/p3.jpg" alt="">
                    </div>
                    <div class="team-social-icon">
                        <ul>
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h6 class="h5">Manuel Millner</h6>
                        <small>Products Arranger</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="team-style1 hoverstyle1">
                    <div class="team-img">
                        <img src="./assets/image/p4.jpg" alt="">
                    </div>
                    <div class="team-social-icon">
                        <ul>
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h6 class="h5">Mary Goldstein</h6>
                        <small>Home Specialist</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <section class="client">
    <div class="container ">
      <div class="client-header">
        <h2 class="title">
          What <span style="color:black">Client </span>Says
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="client_container">
            <div class="review-box">
              <p>
                Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
              </p>
              <span>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </span>
            </div>
            <div class="client_id">
              <div class="imge-box">
                <img src="./assets/image/c1.jpg" alt="">
              </div>
              <div class="client_name">
                <h5>
                  Jone Mark
                </h5>
                <h6>
                  Student
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mx-auto">
          <div class="client_container ">
            <div class="review-box">
              <p>
                Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
              </p>
              <span>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </span>
            </div>
            <div class="client_id">
              <div class="imge-box">
                <img src="./assets/image/c2.jpg" alt="">
              </div>
              <div class="client_name">
                <h5>
                  Anna Crowe
                </h5>
                <h6>
                  Student
                </h6>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
</body>
</html>