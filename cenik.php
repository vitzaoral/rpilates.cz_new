<!DOCTYPE html>
<html lang="cs">

<head>
  <!-- head -->
  <?php $title = 'Ceník'; $loadReservanto = true; include "templates/head.php" ?>
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
            <li>Možnost hrazení terapie a zdravotního cvičení benefity Sodexo a Benefit plus.</li>
            <li>Na volně přístupná cvičení lze zakoupit permanentku (10 vstupů / 700 Kč). Lze kombinovat více druhů cvičení.</li>
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
              <p>Vyberte si sami délku trvání vašeho klinického vyšetření a terapie prostřednictvím systému on-line rezervace. V akutních případech volejte na telefonní číslo <strong><?php echo PHONE ?></strong> a pokusím se vás ošetřit ještě tentýž den.
              </p>
              <?php $serviceId = "22347"; include "templates/reservanto.html" ?>
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
              <p>Vyberte si sami druh masáže. Pokud budete požadovat celotělovou masáž, zarezervujte si celou hodinu.   Pokud se bude jednat o částečnou masáž, stačí si rezervovat půl hodiny.</p>
              <?php $serviceId = "22351"; include "templates/reservanto.html" ?>
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
              <p>Vytvořte si vlastní skupinu a zavolejte si o termín vašich privátních cvičení na číslo <strong><?php echo PHONE ?></strong>. Program cvičení se přímo podřídí vašim požadavkům. Privátní cvičení jsou v harmonogramu R- pilates studia upřednostňovány před lekcemi volně přístupnými.</p>
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
              <p>Ve volně přístupných lekcí zdravotního cvičení se složení skupiny průběžně mění. Proto je stanovený jednotný program lekce. Je nutné si rezervovat cvičení každý týden. S příchodem nového měsíce může nastat změna v harmonogramu volně přístupných lekcí.</p>
              <?php $serviceId = "22352"; include "templates/reservanto.html" ?>
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
              <h2>Pilates, jóga skupinové - privátní </h2>
              <p>Vytvořte si vlastní skupinu a zavolejte si o termín vašich privátních kurzů na číslo <strong><?php echo PHONE ?></strong>. Výukový program každé lekce je pevně daný tak, aby se začátečníků stali pokročilý a z pokročilých mistři. Jeden kurz je složen z 12 výukových lekcí. Lze cvičit vícekrát týdně, vše dle domluvy.</p>
            </div>
            <!-- pricing-desc -->
            <div class="col-md-offset-1 col-md-7 pricing-table">
              <!-- pricing-table -->
              <ul class="list-group">
                <li class="list-group-item active">Jóga, pilates, powerjóga <span class="pull-right price">Cena</span></li>
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
              <h2>Jóga, pilates, powerjóga skupinové - veřejné</h2>
              <p>Výukový program každé lekce je pevně daný. Veřejný kurz probíhá jednou týdně v předem stanoveném čase bez možnosti náhrady. Je nutné se do každé lekce zarezervovat přes on-line rezervační systém.</p>
              <?php $serviceId = "22353"; include "templates/reservanto.html" ?>             
            </div>
            <!-- pricing-desc -->
            <div class="col-md-offset-1 col-md-7 pricing-table">
              <!-- pricing-table -->
              <ul class="list-group">
                <li class="list-group-item active">Jóga, pilates, powerjóga <span class="pull-right price">Cena</span></li>
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
              <p>Vytvořte si skupinu maximálně 3 osob a přijďte si zacvičit s REDCORDEM, s terapeutickým systém závěsných červených lan. Toto cvičení je nutné rezervovat telefonicky na čísle <strong><?php echo PHONE ?></strong>.</p>
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
              <h2>Poradenství / víkendový vzdělávací kurz</h2>
              <p>Poradenství si objednejte telefonicky na čísle <strong><?php echo PHONE ?></strong>. Délka poradenství není předem stanovena.</p>
              <p>Z důvodu praktických částí je kapacita víkendových kurzů omezená. A proto je nutné se přihlásit prostřednictvím online rezervačního systému nebo popřípadě emailu <a href="mailto:<?php echo EMAIL ?>"><?php echo EMAIL ?></a>.</p>
            </div>
            <!-- pricing-desc -->
            <div class="col-md-offset-1 col-md-7 pricing-table">
              <!-- pricing-table -->
              <ul class="list-group">
                <li class="list-group-item active">Kurz <span class="pull-right price">Cena</span></li>
                <li class="list-group-item price-list">Vzdělávací kurz<small>(4 hodiny)</small> <span class="pull-right price">200 Kč / osoba</span></li>
                <li class="list-group-item price-list">Poradenství<span class="pull-right price">5 Kč / 1 minuta</span></li>
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