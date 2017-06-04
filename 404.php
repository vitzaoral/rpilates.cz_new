<!DOCTYPE html>
<html lang="cs">

<head>
  <!-- head -->
  <?php $title = '404 Not found'; include "templates/head.php" ?>
</head>

<body>
  <!-- menu -->
  <?php $page = '404'; include "templates/menu.php" ?>

  <div class="page-header">
    <!-- page-header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-title">
          <h1>404 Tato stránka bohužel neexistuje :(</h1>
        </div>               
      </div>
    </div>
  </div>
  <!-- /.page-header -->
  <div class="main-container">
    <!-- main-container -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 error-pic"><img src="images/404-icon.png" alt="" class="img-responsive"></div>
        <div class="col-md-offset-1 col-md-5 error-description">
          <h1 class="error-title">404 Chyba</h1>
          <h5 class="small-title left">Stránka nenalezena</h5>
          <p class="lead">Omluváme se, tato stránka bohužel neexistuje.</p>
          <a href=<?php echo INDEX ?> class="btn btn-default hvr-sweep-to-right">Zpět na úvod</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.main-container -->

  <!-- footeru -->
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


</body>


</html>