<?php
include 'models/koneksi.php';
include 'models/query.php';

if(isset($_GET["pid"])){
  $id = $_GET["pid"];
  $get_product = mysqli_query($conn, "SELECT * from products WHERE id = '$id'");
  while($val = mysqli_fetch_array($get_product)){
      $name = $val['name'];
      $description = $val['description'];
      $image = $val['image'];
      $ps_img = $val['ps_img'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Details - Cipta Prima Instrumindo</title>
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

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="font-weight: 600;"><?=$name;?></h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Product Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= product Details Section ======= -->
    <section id="product-details" class="product-details">
      <div class="container">

        <div class="row gy-4">
          <div class="col-12 col-lg-4">
            <div class="product-info">
              <div class="d-flex justify-content-center mb-4">
                <img src="assets/img/product/<?=$image;?>" alt="">
              </div>
              <!-- <h3>Product Specification</h3>
              <ul>
                <li><strong>Detail 1</strong>: detail</li>
                <li><strong>Detail 2</strong>: detail</li>
                <li><strong>Detail 3</strong>: detail</li>
                <li><strong>Detail 4</strong>: detail</li>
              </ul> -->
            </div>
          </div>
          <div class="col-12 col-lg-8">
            <div class="product-description">
              <p><?=$description;?></p>
              <h2>Product Series</h2>
              <div class="d-flex justify-content-center">
                <img src="assets/img/product/<?=$ps_img?>"style="max-width: 100%;" alt="">
              </div>
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