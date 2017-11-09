<!DOCTYPE html>
<html lang="cs">

<head>
  <!-- head -->
  <?php $title = 'Služby - pilates/jóga'; include "templates/head.php" ?>
</head>

<body>
 <!-- menu -->
  <?php $page = 'service'; include "templates/menu.php" ?>

  <div class="page-header">
    <!-- page-header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-title">
          <h1>Pilates – jóga – powerjóga</h1>
        </div>
        <div class="col-md-12">
          <!-- breadcrumb -->
          <ol class="breadcrumb">
            <li><a href="index.php">Úvod</a></li>
            <li><a href="sluzby.php">Seznam služeb</a></li>
            <li class="active">Pilates – jóga – powerjóga</li>
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
              <p class="lead">Lekce Pilates a jógy probíhají od září do června formou tříměsíčních kurzů.</p>
              <p>Cvičení probíhá vždy v uzavřené skupině maximálně 7 osob, což umožňuje individuální přístup ke každému klientovi.
                Nejprve budou otevírány kurzy pro začátečníky a dle poptávky i pro středně pokročilé a pokročilé.
              </p>
              <p>Aby byly jóga či Pilates cvičeny správně, je velice důležité naučit se vnímat základní principy cvičení (dýchání,
                koncentrace, centrace, plynulost, přesnost) a používat je automaticky při každém cviku z jednotlivých sestav.
                Je důležité, aby cvičení bylo odborně vedeno a kontrolováno. Pokud se technika cvičení Pilates i jógy neprovádí
                bez precizního zařazení základních principů, stává se cvičení nebezpečným a může klientovi přivodit zdravotní
                problémy, eventuálně zhoršit jeho aktuální stav. Pokud ale pochopíte a přijmete základní principy, tak vám
                toto cvičení pomůže změnit tělesný vzhled i duševní rozpoložení.
              </p>
              <p>Pokud vám nevyhovují termíny a časy volně přístupných lekcí nebo
                vám nevyhovuje cvičení s větším počtem cizích osob, vytvořte si vlastní skupinu a  <a href=<?php echo CONTACT ?>>zavolejte</a> si o termín privátních
                kurzů.
              </p>
              <p>
              Aktuální rozvrh cvičení je uveřejněný na <a href=<?php echo FACEBOOK ?> target="_blank">facebookových stránkách</a> R-pilates studia.
              </p>
              <p class="lead">Nabízím 12ti hodinové kurzy Pilates metody</p>
              <ul class="listnone circle-right">
                <li>Kurz Pilates pro začátečníky</li>
                <li>Kurz Pilates pro středně pokročilé</li>
                <li>Kurz Pilates pro pokročilé</li>
                <li>Kurz Pilates pro pokročilé – cvičení na válci (Pilates roller)</li>
              </ul>
              <p class="lead">Nabízím 12ti hodinové kurzy jógy (vede cvičitelka jógy s dlouhodobou praxí)</p>
              <ul class="listnone circle-right">
                <li>Kurz pro začátečníky</li>
                <li>Kurz pro středně pokročilé</li>
                <li>Kurz pro pokročilé</li>
              </ul>
              <div class="service-img zoom-pic"> <img src="pictures/service-5.jpg" alt="" class="img-responsive"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 sidebar">
          <!-- sidebar menu -->
          <?php $page = 'service7'; $info = 'pilates, jógy nebo powerjógy'; include "templates/service-menu.php" ?> 
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