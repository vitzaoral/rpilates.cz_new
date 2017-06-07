<!DOCTYPE html>
<html lang="cs">

<head>
  <!-- head -->
  <?php $title = 'Ceník'; include "templates/head.php" ?>
</head>

<body>

  <!-- menu -->
  <?php $page = 'pricing'; include "templates/menu.php" ?>

  <div class="page-header">
    <!-- page-header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-title">
          <h1>Ceník nabízených služeb</h1>
        </div>
        <div class="col-md-12">
          <!-- breadcrumb -->
          <ol class="breadcrumb">
            <li><a href="index.php">Úvod</a></li>
            <li class="active">Ceník</li>
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
        <div class="col-md-5">
          <h1>Ceník nabízených služeb</h1>
          <h5 class="small-title left">Ceník</h5>
        </div>
        <div class="col-md-7">
          <p class="lead">Pro objednání služeb využijte prosím online rezervaci, email nebo telefonní kontakt.</p>
        </div>
        <div class="col-md-12 section-title">
          <ul class="listnone circle-right ">
            <li>V průběhu terapie nebo cvičení možnost hlídání dětí. Vždy jen ale po telefonické domluvě!</li>
            <li>Možnost vystavení dárkového poukazu na všechny typy terapie a zdravotního cvičení.</li>
            <li>Možnost hrazení terapie a zdravotního cvičení benefity Sodexo a Benefit plus. </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 pricing-block " id="service1">
          <!-- pricing-block -->
          <div class="row">
            <div class="col-md-4 pricing-desc">
              <!-- pricing-desc -->
              <h2>Rehabilitace</h2>
              <p>Physiotherapy is a clinical health profession that aims to rehabilitate peopleand improve movement disorders.
              </p>
              <?php include "templates/reservanto.html" ?>
            </div>
            <!-- pricing-desc -->
            <div class="col-md-offset-1 col-md-7 pricing-table">
              <!-- pricing-table -->
              <ul class="list-group">
                <li class="list-group-item active">Rehabilitace <span class="pull-right price">Cena</span></li>
                <li class="list-group-item price-list">Vyšetření a individuální terapie<small>(60 minut)</small> <span class="pull-right price">500 Kč</span></li>
                <li class="list-group-item">Individuální terapie<small>(30 minut)</small> <span class="pull-right price">250 Kč</span></li>
                <li class="list-group-item">Individuální terapie<small>(45 minut)</small> <span class="pull-right price">350 Kč</span></li>
              </ul>
            </div>
            <!-- /.pricing-table -->
          </div>
        </div>
        <!-- /.pricing-block -->
        <div class="col-md-12 pricing-block " id="service2">
          <!-- pricing-block -->
          <div class="row">
            <div class="col-md-4 pricing-desc">
              <!-- pricing-desc -->
              <h2>Masáže</h2>
              <p>We are specialists in sports injuries. Our team have worked at the highest levels of international competition
                across variety of sports.</p>
              <?php include "templates/reservanto.html" ?>
             </div>
            <!-- pricing-desc -->
            <div class="col-md-offset-1 col-md-7 pricing-table">
              <!-- pricing-table -->
              <ul class="list-group">
                <li class="list-group-item active">Masáže <span class="pull-right price">Cena</span></li>
                <li class="list-group-item price-list">Masáž<small>(30 minut)</small> <span class="pull-right price">250 Kč</span></li>
                <li class="list-group-item price-list">Masáž<small>(60 minut)</small> <span class="pull-right price">500 Kč</span></li>
                <li class="list-group-item"> <span class="note">+ Kineziotaping (materiál) 1 cm – 1 Kč (vždy součástí terapie nebo masáže)</span></li>
                <li class="list-group-item"> <span class="note">+ Termoterapie, rašelinové zábaly (součástí terapie nebo masáže)</span></li>
                <li class="list-group-item"> <span class="note">+ Příplatek za cestovné při terapii u vás doma (3 Kč/1 km) - vždy po telefonické domluvě</span></li>
              </ul>
            </div>
            <!-- /.pricing-table -->
          </div>
        </div>
        <!-- /.pricing-block -->
        <div class="col-md-12 pricing-block " id="service3">
          <!-- pricing-block -->
          <div class="row">
            <div class="col-md-4 pricing-desc">
              <!-- pricing-desc -->
              <h2>Zdravotní cvičení skupinové – privátní</h2>
              <p>Tuto službu je nutné rezervovat telefonicky na čísle <strong>774 988 156</strong>.</p>
            </div>
            <!-- pricing-desc -->
            <div class="col-md-offset-1 col-md-7 pricing-table">
              <!-- pricing-table -->
              <ul class="list-group">
                <li class="list-group-item active">Zdravotní cvičení <span class="pull-right price">Cena</span></li>
                <li class="list-group-item price-list">Cvičení 2 osoby<small>(60 minut)</small> <span class="pull-right price">200 Kč / osoba</span></li>
                <li class="list-group-item price-list">Cvičení 3 osoby<small>(60 minut)</small> <span class="pull-right price">150 Kč / osoba</span></li>
                <li class="list-group-item price-list">Cvičení 4 osoby<small>(60 minut)</small> <span class="pull-right price">100 Kč / osoba</span></li>
              </ul>
            </div>
            <!-- /.pricing-table -->
          </div>
        </div>
        <!-- /.pricing-block -->
        <div class="col-md-12 pricing-block" id="service4">
          <!-- pricing-block -->
          <div class="row">
            <div class="col-md-4 pricing-desc">
              <!-- pricing-desc -->
              <h2>Zdravotní cvičení skupinové – volně přístupné</h2>
              <p>We are specialists in sports injuries. Our team have worked at the highest levels of international competition
                across variety of sports.</p>
              <?php include "templates/reservanto.html" ?>
             </div>
            <!-- pricing-desc -->
            <div class="col-md-offset-1 col-md-7 pricing-table">
              <!-- pricing-table -->
              <ul class="list-group">
                <li class="list-group-item active">Zdravotní cvičení <span class="pull-right price">Cena</span></li>
                <li class="list-group-item price-list">Cvičení 5 - 7 osob<small>(60 minut)</small> <span class="pull-right price">80 Kč / osoba</span></li>
              </ul>
            </div>
            <!-- /.pricing-table -->
          </div>
        </div>
        <!-- /.pricing-block -->
        <div class="col-md-12 pricing-block" id="service5">
          <!-- pricing-block -->
          <div class="row">
            <div class="col-md-4 pricing-desc">
              <!-- pricing-desc -->
              <h2>Joga, pilates, powerjoga skupinové - privátní </h2>
              <p>Tuto službu je nutné rezervovat telefonicky na čísle <strong>774 988 156</strong>.</p>
            </div>
            <!-- pricing-desc -->
            <div class="col-md-offset-1 col-md-7 pricing-table">
              <!-- pricing-table -->
              <ul class="list-group">
                <li class="list-group-item active">Joga, pilates, powerjoga <span class="pull-right price">Cena</span></li>
                <li class="list-group-item price-list">Lekce 2 osoby<small>(60 minut)</small> <span class="pull-right price">200 Kč / osoba</span></li>
                <li class="list-group-item price-list">Lekce 3 osoby<small>(60 minut)</small> <span class="pull-right price">150 Kč / osoba</span></li>
                <li class="list-group-item price-list">Lekce 4 osoby<small>(60 minut)</small> <span class="pull-right price">100 Kč / osoba</span></li>
              </ul>
            </div>
            <!-- /.pricing-table -->
          </div>
        </div>
        <!-- /.pricing-block -->
        <div class="col-md-12 pricing-block" id="service6">
          <!-- pricing-block -->
          <div class="row">
            <div class="col-md-4 pricing-desc">
              <!-- pricing-desc -->
              <h2>Joga, pilates, powerjoga skupinové - veřejné</h2>
              <p>Physiotherapy is a clinical health profession that aims to rehabilitate people following injury and improve
                movement disorders.</p>
              <?php include "templates/reservanto.html" ?>             
            </div>
            <!-- pricing-desc -->
            <div class="col-md-offset-1 col-md-7 pricing-table">
              <!-- pricing-table -->
              <ul class="list-group">
                <li class="list-group-item active">Joga, pilates, powerjoga <span class="pull-right price">Cena</span></li>
                <li class="list-group-item price-list">Lekce 5 - 7 osob<small>(60 minut)</small> <span class="pull-right price">80 Kč / osoba</span></li>
              </ul>
            </div>
            <!-- /.pricing-table -->
          </div>
        </div>
        <!-- /.pricing-block -->
        <div class="col-md-12 pricing-block" id="service7">
          <!-- pricing-block -->
          <div class="row">
            <div class="col-md-4 pricing-desc">
              <!-- pricing-desc -->
              <h2>Zdravotní cvičení na systému REDCORD (červená lana) - privátní</h2>
              <p>Tuto službu je nutné rezervovat telefonicky na čísle <strong>774 988 156</strong>.</p>
            </div>
            <!-- pricing-desc -->
            <div class="col-md-offset-1 col-md-7 pricing-table">
              <!-- pricing-table -->
              <ul class="list-group">
                <li class="list-group-item active">Zdravotní cvičení REDCORD <span class="pull-right price">Cena</span></li>
                <li class="list-group-item price-list">Cvičení 1 osoba<small>(60 minut)</small> <span class="pull-right price">350 Kč / osoba</span></li>
                <li class="list-group-item price-list">Cvičení 2 osoby<small>(60 minut)</small> <span class="pull-right price">200 Kč / osoba</span></li>
                <li class="list-group-item price-list">Cvičení 3 osoby<small>(60 minut)</small> <span class="pull-right price">150 Kč / osoba</span></li>
              </ul>
            </div>
            <!-- /.pricing-table -->
          </div>
        </div>
        <!-- /.pricing-block -->
        <div class="col-md-12 pricing-block" id="service8">
          <!-- pricing-block -->
          <div class="row">
            <div class="col-md-4 pricing-desc">
              <!-- pricing-desc -->
              <h2>Víkendový vzdělávací kurz</h2>
              <p>Tuto službu je nutné rezervovat telefonicky na čísle <strong>774 988 156</strong>.</p>
            </div>
            <!-- pricing-desc -->
            <div class="col-md-offset-1 col-md-7 pricing-table">
              <!-- pricing-table -->
              <ul class="list-group">
                <li class="list-group-item active">Kurz <span class="pull-right price">Cena</span></li>
                <li class="list-group-item price-list">Vzdělávací kurz<small>(4 hodiny)</small> <span class="pull-right price">200 Kč / osoba</span></li>
              </ul>
            </div>
            <!-- /.pricing-table -->
          </div>
        </div>
        <!-- /.pricing-block -->
      </div>
    </div>
  </div>
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