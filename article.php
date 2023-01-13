<?php
include 'models/koneksi.php';
include 'models/query.php';

if(isset($_GET["cid"])){
  $id = $_GET["cid"];
  $get_article = mysqli_query($conn, "SELECT * from article WHERE id = '$id'");
  while($data = mysqli_fetch_array($get_article)){
      $title = $data['title'];
      $intro_text = $data['intro_text'];
      $full_text = $data['full_text'];
      $image = $data['image'];
      $modified = $data['modified'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Article - Cipta Prima Instrumindo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon_io/favicon-16x16.png" rel="icon">
  <link href="assets/img/favicon_io/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <?php 
  include 'header.php';
  ?>

  <main id="main" class="section-bg">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Article</li>
          </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= product Details Section ======= -->
    <section id="product-details" class="product-details">
      <div class="container">
        <h2 class="pb-4" style="font-weight: 600;"><?=$title;?></h2>
        <div class="row">
          <div class="col-12 col-md-6">
              <div class="img-article">
                <img src="assets/img/article/<?=$image;?>" alt="" style="max-width:100%">
              </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="product-description">
              <p><?=$full_text;?></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End product Details Section -->

  </main><!-- End #main -->

  <?php 
  include 'footer.php';
  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>