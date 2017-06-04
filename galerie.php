<!DOCTYPE html>
<html lang="cs">

<head>
  <!-- head -->
  <?php $title = 'Galerie'; include "templates/head.php" ?>
</head>

<body>
  <!-- menu -->
  <?php $page = 'gallery'; include "templates/menu.php" ?>
  
  <div class="page-header">
    <!-- page-header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-title">
          <h1>Galerie</h1>
        </div>
        <div class="col-md-12">
          <!-- breadcrumb -->
          <ol class="breadcrumb">
            <li><a href="index.php">Úvod</a></li>
            <li class="active">Galerie</li>
          </ol>
        </div>
        <!-- /.breadcrumb -->
      </div>
    </div>
  </div>
  <!-- /.page-header -->
  <div class="main-container">
    <!-- main-container -->
    <div class="container">
      <div class="row">
        <div class="col-md-5 section-title">
          <h1>Fotogalerie</h1>
          <h5 class="small-title left">Podívejte se, jak to u mě vypadá</h5>
        </div>
        <div class="col-md-7">
          <p class="lead">TODO Our focus on each individual with a special level of care and consideration provides a first class physiotherapy
            service that is above and beyond your expectations. </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 gallery-block">
          <!--Project block start-->
          <div class="gallery-thumb zoom-pic">
            <!--Pro thumb start-->
            <a href="images/gallery-thumb-1.jpg" class="image-link" title="Gallery Title"> <img src="images/gallery-thumb-1.jpg"  alt="" class="img-responsive"/> </a>
          </div>
          <!--Pro thumb start-->
        </div>
        <div class="col-md-4 gallery-block">
          <!--Project block start-->
          <div class="gallery-thumb zoom-pic ">
            <!--Pro thumb start-->
            <a href="images/gallery-thumb-2.jpg" class="image-link" title="Project Light Box Gallery Title"> <img src="images/gallery-thumb-2.jpg"  alt="" class="img-responsive"/> </a>
          </div>
          <!--Pro thumb start-->
        </div>
        <div class="col-md-4 gallery-block">
          <!--Project block start-->
          <div class="gallery-thumb zoom-pic">
            <!--Pro thumb start-->
            <a href="images/gallery-thumb-3.jpg" class="image-link" title="Project Light Box Gallery Title"> <img src="images/gallery-thumb-3.jpg"  alt="" class="img-responsive"/> </a>
          </div>
          <!--Pro thumb start-->
        </div>
        <div class="col-md-4 gallery-block">
          <!--Project block start-->
          <div class="gallery-thumb zoom-pic">
            <!--Pro thumb start-->
            <a href="images/gallery-thumb-4.jpg" class="image-link" title="Project Light Box Gallery Title"> <img src="images/gallery-thumb-4.jpg"  alt="" class="img-responsive"/> </a>
          </div>
          <!--Pro thumb start-->
        </div>
        <div class="col-md-4 gallery-block">
          <!--Project block start-->
          <div class="gallery-thumb zoom-pic">
            <!--Pro thumb start-->
            <a href="images/gallery-thumb-5.jpg" class="image-link" title="Project Light Box Gallery Title"> <img src="images/gallery-thumb-5.jpg"  alt="" class="img-responsive"/> </a>
          </div>
          <!--Pro thumb start-->
        </div>
        <div class="col-md-4 gallery-block">
          <!--Project block start-->
          <div class="gallery-thumb zoom-pic">
            <!--Pro thumb start-->
            <a href="images/gallery-thumb-6.jpg" class="image-link" title="Project Light Box Gallery Title"> <img src="images/gallery-thumb-6.jpg"  alt="" class="img-responsive"/> </a>
          </div>
          <!--Pro thumb start-->
        </div>
        <div class="col-md-4 gallery-block">
          <!--Project block start-->
          <div class="gallery-thumb zoom-pic">
            <!--Pro thumb start-->
            <a href="images/gallery-thumb-7.jpg" class="image-link" title="Project Light Box Gallery Title"> <img src="images/gallery-thumb-7.jpg"  alt="" class="img-responsive"/> </a>
          </div>
          <!--Pro thumb start-->
        </div>
        <div class="col-md-4 gallery-block ">
          <!--Project block start-->
          <div class="gallery-thumb zoom-pic">
            <!--Pro thumb start-->
            <a href="images/gallery-thumb-8.jpg" class="image-link" title="Project Light Box Gallery Title"> <img src="images/gallery-thumb-8.jpg"  alt="" class="img-responsive"/> </a>
          </div>
          <!--Pro thumb start-->
        </div>
        <div class="col-md-4 gallery-block">
          <!--Project block start-->
          <div class="gallery-thumb zoom-pic">
            <!--Pro thumb start-->
            <a href="images/gallery-thumb-9.jpg" class="image-link" title="Project Light Box Gallery Title"> <img src="images/gallery-thumb-9.jpg"  alt="" class="img-responsive"/> </a>
          </div>
          <!--Pro thumb start-->
        </div>
      </div>
    </div>
  </div>
  <!-- /.main-container -->

  <!-- footer -->
  <?php include "templates/footer.php" ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <!-- script Header -->
  <script type="text/javascript" src="js/script.js"></script>
  <!-- sticky Header -->
  <script type="text/javascript" src="js/jquery.sticky.js"></script>
  <script type="text/javascript" src="js/sticky-header.js"></script>

  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/popup-gallery.js"></script>

</body>

</html>