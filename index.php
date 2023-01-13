<?php
include 'models/koneksi.php';
include 'models/query.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cipta Prima Instrumindo</title>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1><span>Cipta Prima Instrumindo</span></h1>
      <h2>Measurement, Accurate, and Trustworthly</h2>
      <a href="#product" class="btn-get-started scrollto">view our products</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>About Company</h2>
          <p>Cipta Prima Instrumindo merupakan perusahaan
            yang bergerak di bidang engineering, instrumentasi, elektrikal dan kontrol sistem.
            Dengan integrasi yang kami miliki, kami mampu untuk bergerak sebagai supply product 
            instrumentasi level sensor, pressure, temperature dan produk sensor lainnya, mechanical customize.
            engineering integrasi sistem dan design mechanical electrical mesin.  
          </p>
        </div>
      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= Product Section ======= -->
    <section id="product" class="product section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Product</h2>
        </div>

        <div class="row product-container">
          <?php
          foreach($products as $product) :
          ?>
          <div class="col-lg-3 col-md-6 product-item filter-app wow fadeInUp">
            <div class="product-wrap">
              <figure>
                <div class="bg-image d-flex justify-content-center">
                  <img src="assets/img/product/<?= $product["image"];?>" class="img-fluid" alt="">
                </div>
                <a href="assets/img/product/<?= $product["ps_img"];?>" data-gallery="productGallery" class="link-preview product-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="product-details.php?pid=<?= $product["id"];?>" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="product-info">
                <h4><a href="product-details.php?pid=<?= $product["id"];?>"><?= $product["name"];?></a></h4>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

        </div>

      </div>
    </section><!-- End product Section -->

    <!-- ======= Services Section ======= -->
    <section id="services"  class="services-section d-flex flex-column justify-content-center align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="title">
              <h2>Our Services</h2>
              <p>Untuk memberikan layanan terbaik kami, kami memiliki beberapa bidang 
                pelayanan usaha Supply dan Distribusi Produk. Selain itu, beberapa pelayanan Engineering Control dapat kami kerjakan. </p>
              <a href="service.php" class="btn mt-2 d-md-none">Lihat Selengkapnya</a>
              </div>
          </div>
          <div class="col-12 col-md-9 pt-3 pb-5 service-detail">
            <div class="row">
              <?php foreach($services as $service):
              ?>
              <div class="col-12 col-md-4">
                <div class="card mt-4">
                  <div class="card-body">
                    <h5 class="card-title"><?=$service["point"]?></h5>
                  </div>
                </div>
              </div>
              <?php endforeach;?>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Article Section ======= -->
    <section id="article" class="article section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Latest News & Article</h2>
        </div>
        <?php
        foreach($articles as $article):
        ?>
        <div class="row box mb-4">
          <div class="col-md-2 p-0 responsive">
            <img src="assets/img/article/<?=$article["image"]?>">
          </div>
          <div class="col-md-10">
            <div class="text-article">
              <h4><a href="article.php?cid=<?=$article["id"]?>" class="stretched-link"><?=$article["title"]?></a></h4>
              <p><?=$article["intro_text"]?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

    </section><!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact d-flex flex-column justify-content-center align-items-center">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Jl Pesantren Al-fatah Blok-B89<br>Kab. Bogor, ID 16820</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>contact@ciptaprimainstrumindo.com<br>ciptaprimainstrumindo@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+62 8786 550 6184</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form action="contact.php" method="post" role="form" class="email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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