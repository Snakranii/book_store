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
  <section class="home-intro">
    <div class="container ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <h5 class="intro-label">
              Bostorek Bookstore
            </h5>
            <h1 class="intro-title">
              <span style="color:#f44344">book is window to</span> the world
            </h1>
            <p class="intro-description">
              bookstore is the fastest way to compare book prices and buy books from online book sellers in India.
            </p>
            <a href="about.php" class="intro-link">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="./assets/image/slider-img.png" alt="image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="facility">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="feature mb-40">
            <div class="feature-icon"><img
                src="./assets/image/icon-1.webp" alt=""></div>
            <div class="feature-content">
              <h4 class="banner-title" >Free Shipping</h4>
              <p class="banner-bottom">Order over $100</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="feature mb-40">
            <div class="feature-icon"><img
                src="./assets/image/icon-2.png" alt=""></div>
            <div class="feature-content">
              <h4 class="banner-title" >Secure Payment</h4>
              <p class="banner-bottom">100% Secure Payment</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 justify-content-center">
          <div class="feature mb-40">
            <div class="feature-icon"><img src="./assets/image/icon-3.png" alt=""></div>
            <div class="feature-content">
              <h4 class="banner-title" >Best Price</h4>
              <p class="banner-bottom">Guaranteed Low Cost</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="feature mb-40">
            <div class="feature-icon"><img
                src="./assets/image/icon-4.png" alt=""></div>
            <div class="feature-content">
              <h4 class="banner-title" >Easy Return</h4>
              <p class="banner-bottom">Within 30 Days returns</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="collection">
    <div class="container">
      <div class="row">
        <div class="  col-md-4 col-sm-2 col-12">
          <div class="collection-lining collection_1 mb-30 text-left  ">
            <a href="/collections/all">
                <img src="./assets/image/horror.png " class="feature-image img-fluid" alt="">
            </a>
            <div class="banner best-coll-content">
              <h4 class="banner-title"><a class="ban_btn1" href="/collections/all">Horror</a></h4>
              <p class="banner-bottom">Super Collections</p><a class="ban_btn1" href="/collections/all"></a>
            </div>
          </div>
        </div>
        <div class="  col-md-4 col-sm-2 col-12">
          <div class="collection-lining collection_2 mb-30 text-left  ">
            <a href="/collections/all">
            <img src="./assets/image/fantcy.png " class="feature-image img-fluid" alt="">
            </a>
            <div class="banner best-coll-content">
              <h4 class="banner-title"><a class="ban_btn1" href="/collections/all">Fantasy</a></h4>
              <p class="banner-bottom">Special Collections</p><a class="ban_btn1" href="/collections/all"></a>
            </div>
          </div>
        </div>
        <div class="  col-md-4 col-sm-2 col-12">
          <div class="collection-lining collection_3 mb-30 text-left  ">
            <a href="/collections/all">
              <img src="./assets/image/feature-health.png " class="feature-image img-fluid" alt="">
            </a>
            <div class="banner best-coll-content">
              <h4 class="banner-title"><a class="ban_btn1" href="/collections/all">Science fiction</a></h4>
              <p class="banner-bottom">Best Collections</p><a class="ban_btn1" href="/collections/all"></a>
            </div>
          </div>
        </div>
        
        <div class="  col-md-4 col-sm-2 col-12">
          <div class="collection-lining collection_1 mb-30 text-left  ">
            <a href="/collections/all">
                <img src="./assets/image/biography.png " class="feature-image img-fluid" alt="">
            </a>
            <div class="banner best-coll-content">
              <h4 class="banner-title"><a class="ban_btn1" href="/collections/all">Biography</a></h4>
              <p class="banner-bottom">Nice Collections</p><a class="ban_btn1" href="/collections/all"></a>
            </div>
          </div>
        </div>
        <div class="  col-md-4 col-sm-2 col-12">
          <div class="collection-lining collection_2 mb-30 text-left  ">
            <a href="/collections/all">
            <img src="./assets/image/historyical.png " class="feature-image img-fluid" alt="">
            </a>
            <div class="banner best-coll-content">
              <h4 class="banner-title"><a class="ban_btn1" href="/collections/all">Historical</a></h4>
              <p class="banner-bottom">Special Collections</p><a class="ban_btn1" href="/collections/all"></a>
            </div>
          </div>
        </div>
        <div class="  col-md-4 col-sm-2 col-12">
          <div class="collection-lining collection_3 mb-30 text-left  ">
            <a href="/collections/all">
              <img src="./assets/image/children.png " class="feature-image img-fluid" alt="">
            </a>
            <div class="banner best-coll-content">
              <h4 class="banner-title"><a class="ban_btn1" href="/collections/all">Children</a></h4>
              <p class="banner-bottom">Best Collections</p><a class="ban_btn1" href="/collections/all"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="home-contact">
    <div class="content">
      <h3>have any questions?</h3>
      <p>Curious about Bookstore's in the GCC?Ask us anything about our brand and products and get factual responses.
      </p>
      <a href="contact.php" class="white-btn">contact us</a>
    </div>
  </section>
  <section class="about_section">
    <div class="container ">
      <div class="row ">
        <div class="col-md-6">
          <div class="img-box">
            <img src="./assets/image/about-img.png" alt="image" class="img-fluid">
          </div>
        </div>
        <div class="col-md-6 about_bg">
          <div class="detail-box">
            <h2 class="intro-title">
              About Our Bookstore
            </h2>
            <p class="intro-description">
              At cumque tenetur iste molestiae, vel eum reiciendis assumenda! Numquam, repudiandae. Consequuntur
              obcaecati recusandae aliquam, amet doloribus eius dolores officiis cumque? Quibusdam praesentium pariatur
              sapiente mollitia, amet hic iusto voluptas! Iusto quo earum vitae excepturi, ipsam aliquid deleniti
              assumenda culpa deserunt.
            </p>
            <a href="about.php" class="intro-link">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php'; ?>
</body>

</html>