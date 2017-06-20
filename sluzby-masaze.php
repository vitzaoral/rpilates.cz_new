<!DOCTYPE html>
<html lang="cs">

<head>
  <!-- head -->
  <?php $title = 'Služby - masáže'; include "templates/head.php" ?>
</head>

<body>
  <!-- menu -->
  <?php $page = 'service'; include "templates/menu.php" ?>

  <div class="page-header">
    <!-- page-header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-title">
          <h1>Masáže</h1>
        </div>
        <div class="col-md-12">
          <!-- breadcrumb -->
          <ol class="breadcrumb">
            <li><a href="index.php">Úvod</a></li>            
            <li><a href="sluzby.php">Seznam služeb</a></li>
            <li class="active">Masáže</li>
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
        <div class="col-md-8 content-left">
          <div class="row">
            <div class="col-md-12">
              <p class="lead">Masáže jsou vhodným prostředkem ke zmírňování bolesti, napětí a stresu.</p>
              <p>Pomáhají zlepšit krevní oběh a uvolňují napětí organizmu. Nabízím masáže celkové – celotělové – obvyklá délka
                procedury je 60 minut, nebo částečné (oblasti šíje, zad, dolních končetin, plosky, pánve, hrudníku, břicha)
                s obvyklou délkou procedury 30 minut. Masáže je vhodné kombinovat s procedurami termoterapie (předehřátí
                za pomoci rašelinových sáčků, lávových kamenů, gelových sáčků) a aromaterapie.
              </p>
              <p class="lead">Druhy masáží</p>
              <ul class="listnone circle-right">
                <li>Masáže klasické</li>
                <li>Masáže reflexní</li>
                <li>Masáže sportovní</li>
                <li>Masáže horkými lávovými kameny</li>               
              </ul>              
              <div class="service-img zoom-pic"> <img src="pictures/service-3.jpg" alt="" class="img-responsive"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 sidebar">
          <!-- sidebar menu -->
          <?php $page = 'service3'; $info = 'masáží'; include "templates/service-menu.php" ?>          
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


</body>

</html>