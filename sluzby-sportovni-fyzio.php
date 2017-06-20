<!DOCTYPE html>
<html lang="cs">

<head>
  <!-- head -->
  <?php $title = 'Služby - sportovní fyzio'; include "templates/head.php" ?>
</head>

<body>
  <!-- menu -->
  <?php $page = 'service'; include "templates/menu.php" ?>

  <div class="page-header">
    <!-- page-header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-title">
          <h1>Sportovní fyzioterapie</h1>
        </div>
        <div class="col-md-12">
          <!-- breadcrumb -->
          <ol class="breadcrumb">
            <li><a href="index.php">Úvod</a></li>
            <li><a href="sluzby.php">Seznam služeb</a></li>
            <li class="active">Sportovní fyzioterapie</li>            
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
              <p class="lead">Sportovní fyzioterapie je určena profesionálním i amatérským sportovcům, kteří chtějí zvyšovat svoji výkonnost
                na profesionální úrovni.</p>
              <p>Tito sportovci chtějí předcházet zranění, přetížení, správně posilovat a regenerovat. Pomohu i s léčbou sportovních
                úrazů pro rychlejší návrat do tréninkového procesu.
              </p>
              <p>V rámci prevence sportovních úrazů se zaměřuji na edukaci vhodné formy stretchingu, efektivizaci specifického
                sportovního pohybu (odbití míče, došlap, výskok…), korekci držení těla v průběhu posilování, sestavení funkčního
                kondičního rehabilitačního tréninku a výběr vhodné formy kompenzačního cvičení.
              </p>
              <p class="lead">Nabídka</p>
              <ul class="listnone circle-right">
                <li>Vyšetření (kineziologický rozbor, rozbor sportovní činnosti)</li>
                <li>Individuální terapie trvající 30 min, 45 min nebo 60 min (dle domluvy a rozsahu obtíží)</li>
              </ul>
              <div class="service-img zoom-pic"> <img src="pictures/service-2.jpg" alt="" class="img-responsive"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 sidebar">
           <!-- sidebar menu -->
           <?php $page = 'service2'; $info = 'sportovní fyzioterapie'; include "templates/service-menu.php" ?>          
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