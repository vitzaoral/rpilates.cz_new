<!DOCTYPE html>
<html lang="cs">

<head>
  <!-- head -->
  <?php $title = 'Úvod'; $loadReservanto = true; include "templates/head.php" ?>
</head>

<body>

  <!-- menu -->
  <?php $page = 'index'; include "templates/menu.php" ?>

  <div id="slider" class="owl-carousel owl-theme">
    <!-- slider -->
    <div class="item"><img src="pictures/slider-1.jpg" alt="">
      <div class="container">
        <div class="col-md-6 slider-caption">
          <h1 class="slider-title">Sportovní fyzioterapie </h1>
          <p class="slider-description">Jsme rehabilitační ambulance zaměřená především na sportovní fyzioterapii.</p>
          <a href=<?php echo ABOUT ?> class="btn btn-default hvr-sweep-to-right">Více o nás</a>
        </div>
      </div>
    </div>
    <div class="item"><img src="pictures/slider-2.jpg" alt="">
      <div class="container">
        <div class="col-md-6 slider-caption">
          <h1 class="slider-title">Pilates / jóga / powerjóga</h1>
          <p class="slider-description">Poskytuje kompletní nabídku kurzů Pilates metody, jógy a powerjógy.</p>
          <a href=<?php echo GALLERY ?> class="btn btn-default hvr-sweep-to-right">Podívejte se, jak to u nás vypadá</a>
        </div>
      </div>
    </div>
    <div class="item"> <img src="pictures/slider-3.jpg" alt="">
      <div class="container">
        <div class="col-md-6 slider-caption">
          <h1 class="slider-title">Poradenství / kurzy pro veřejnost </h1>
          <p class="slider-description">Připravuje poradenství a vzdělávací víkendové kurzy pro veřejnost.</p>
          <a href=<?php echo SERVICE ?> class="btn btn-default hvr-sweep-to-right">Podívejte se na naše služby</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.slider -->

  <div class="section-space">
    <div class="section-space section-color">
      <div class="container">
        <div class="row company-profile">
          <div class="col-md-12 profile-desciption">
            <h5 class="small-title left">Vítejte na stránkách R pilates studia</h5>
            <p class="lead">Jsme rehabilitační ambulance zaměřená především na sportovní fyzioterapii a léčebnou tělesnou výchovu</p>
            <p>Lidské tělo je pozoruhodným systémem, který zaslouží naši pozornost a péči. V dnešní uspěchané době plné stresu
              a vynucených poloh je třeba si najít čas i na navození fyzické a psychické pohody. Věnujte proto pozornost
              "hlasům svého těla" dříve, než dojde k propuknutí závažnějších obtíží a nezatracujte možnost preventivního
              působení "čtyř R" (rehabilitace, regenerace, rekondice a relaxace).
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 section-title">
            <h1>Naše služby</h1>
            <h5 class="small-title left">Vyberte si z naší široké nabídky</h5>
          </div>
          <div class="col-md-7">
            <p class="lead">Při terapii využívám širokou paletu terapeutických konceptů, metod a technik, ve kterých jsem byla odborně vzdělána
              a proškolena.</p>
          </div>
        </div>
        <div class="row">
          <div class="service-thumbnail" id="service-thumbnail">
            <div class="col-md-12 service-thumbnail item">
              <!--service-thumnnail-->
              <div class="service-img zoom-pic">
                <a href=<?php echo SERVICE1 ?>><img src="pictures/service-1.jpg" alt="" class="img-responsive"></a>
              </div>
              <div class="service-content">
                <h2>Rehabilitace</h2>
                <p>Standardem léčby je odborné fyzioterapeutické vyšetření (tzv. kineziologický rozbor), na jehož základě se
                  stanovují následné terapeutické cíle a vybírají vhodné terapeutické postupy.
                </p>
              </div>
            </div>

            <!-- /.service-thumnnail -->
            <div class="col-md-12 service-thumbnail item">
              <!-- service-thumnnail -->
              <div class="service-img zoom-pic">
                <a href=<?php echo SERVICE2 ?>><img src="pictures/service-2.jpg" alt="" class="img-responsive"></a>
              </div>
              <div class="service-content">
                <h2>Sportovní fyzioterapie</h2>
                <p>Služba je určena profesionálním i amatérským sportovcům, kteří chtějí zvyšovat svoji výkonnost na profesionální
                  úrovni, chtějí předcházet zranění, přetížení, správně posilovat a regenerovat.</p>
              </div>
            </div>

            <!-- /.service-thumnnail -->
            <div class="col-md-12 service-thumbnail item">
              <!-- /.service-thumnnail -->
              <div class="service-img zoom-pic">
                <a href=<?php echo SERVICE3 ?>><img src="pictures/service-3.jpg" alt="" class="img-responsive"></a>
              </div>
              <div class="service-content">
                <h2>Masáže</h2>
                <p>Masáže jsou vhodným prostředkem ke zmírňování bolesti, napětí a stresu. Pomáhají zlepšit krevní oběh a uvolňují
                  napětí organizmu. Nabízím masáže celkové a nebo částečné.</p>
              </div>
            </div>

            <!-- /.service-thumnnail -->
            <div class="col-md-12 service-thumbnail item">
              <!-- service-thumnnail -->
              <div class="service-img zoom-pic">
                <a href=<?php echo SERVICE4 ?>><img src="pictures/service-4.jpg" alt="" class="img-responsive"></a>
              </div>
              <div class="service-content">
                <h2>Skupinové zdravotní cvičení</h2>
                <p>Cvičení probíhá ve skupině maximálně 7 osob. Cvičení trvá 60 minut a jeho intenzita se stanovuje aktuálně
                  dle složení skupiny.</p>
              </div>
            </div>

            <div class="col-md-12 service-thumbnail item">
              <!-- /.service-thumnnail -->
              <div class="service-img zoom-pic">
                <a href=<?php echo SERVICE5 ?>><img src="pictures/service-5.jpg" alt="" class="img-responsive"></a>
              </div>
              <div class="service-content">
                <h2>Pilates – jóga – powerjóga</h2>
                <p>Lekce Pilates a jógy probíhají od září do června formou tříměsíčních kurzů. Cvičení probíhá vždy v uzavřené
                  skupině maximálně 7 osob, což umožňuje individuální přístup ke každému klientovi.</p>
              </div>
            </div>
            <!-- /.service-thumnnail -->

            <div class="col-md-12 service-thumbnail item">
              <!-- /.service-thumnnail -->
              <div class="service-img zoom-pic">
                <a href=<?php echo SERVICE6 ?>><img src="pictures/service-6.jpg" alt="" class="img-responsive"></a>
              </div>
              <div class="service-content">
                <h2>Poradenství – víkendové kurzy</h2>
                <p>Nabízím Vám individuální či skupinové poradenství s fyzioterapeutem. Také je možné se účastnit víkendových
                  kurzů (nordic walking, bolavá záda, ploché nohy atd.).</p>
              </div>
            </div>
            <!-- /.service-thumnnail -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="parallax-cta parallax parallax-2">
    <!-- parallax cta -->
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8 about-hp">
          <h1>Mgr. Jarmila Štěpánová</h1>
          <p>Jmenuji se Jarmila Štěpánová a vítám Vás na svých stránkách R pilates studia.</p>
          <p>Mojí alma mater se stala Fakulta tělesné kultury Univerzity Palackého v Olomouci, kde jsem vystudovala magisterský
            obor <strong>Fyzioterapie</strong> a bakalářský obor <strong>Aplikované pohybové aktivity</strong>, na který
            jsem navázala studiem doktorským.</p>
          <p>Propojení jmenovaných oborů mě předurčilo k zaměření se na oblast sportovní fyzioterapie a léčebné tělesné výchovy.</p>
          <p>K rozvoji mé fyzioterapeutické praxe přispěly zahraniční stáže ve sportovně rehabilitačním ústavu v Norsku a Velké
            Británii a následně praxe v České republice zahrnující zařízení ambulantního, nemocničního i lázeňského typu.
          </p>
          <a href=<?php echo ABOUT ?> class="btn btn-default hvr-sweep-to-right">Více o mě</a> </div>
      </div>
    </div>
  </div>

  <div class="section-space section-color">
    <div class="container">
      <div class="row">
        <div class="col-md-12 pricing-block">
          <!-- pricing-block -->
          <div class="row">
            <div class="col-md-4 pricing-desc">
              <!-- pricing-desc -->
              <h1>Ceník a rezervace</h1>
              <p>Na jednotlivé programy se lze rezervovat online nebo telefonicky. Případné zrušení rezervovaného termínu je
                třeba nahlásit minimálně 24 hodin předem na tel. čísle:
                <strong><?php echo PHONE ?></strong>.
              </p>
              <?php include "templates/reservanto.html" ?>
            </div>
            <!-- pricing-desc -->
            <div class="col-md-offset-1 col-md-7 pricing-table">
              <!-- pricing-table -->
              <ul class="list-group">
                <li class="list-group-item active">Nabízené služby <span class="pull-right price">Ceník</span></li>
                <li class="list-group-item price-list">Rehabilitace <small>(vyšetření, individuální terapie)</small>
                  <a href=<?php echo PRICING . "#service1" ?> class="btn hvr-sweep-to-right pull-right">Ceník >></a>
                </li>
                <li class="list-group-item price-list">Masáže <small>(30 - 60 min + další služby)</small>
                  <a href=<?php echo PRICING . "#service2" ?> class="btn hvr-sweep-to-right pull-right">Ceník >></a>
                </li>
                <li class="list-group-item price-list">Zdravotní cvičení skupinové<small>(privátní / veřejné, 60 min)</small>
                  <a href=<?php echo PRICING . "#service3" ?> class="btn hvr-sweep-to-right pull-right">Ceník >></a>
                </li>
                <li class="list-group-item price-list">Jóga, pilates, powerjóga skupinové<small>(privátní / veřejné, 60 min)</small>
                  <a href=<?php echo PRICING . "#service5" ?> class="btn hvr-sweep-to-right pull-right">Ceník >></a>
                </li>
                <li class="list-group-item price-list">Víkendový vzdělávací kurz <small>(4 hod)</small>
                  <a href=<?php echo PRICING . "#service8" ?> class="btn hvr-sweep-to-right pull-right">Ceník >></a>
                </li>
              </ul>
            </div>
            <!-- /.pricing-table -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 section-title">
          <h1>Kde nás najdete</h1>
          <h5 class="small-title left">Naše adresa</h5>
        </div>
        <div class="col-md-7">
          <p class="lead">Adresa provozovny:
            <?php echo ADDRESS ?>.</p>
        </div>
      </div>
    </div>
    <div>
      <div class="row">
        <div class="col-md-12 location-map">
          <div class="map" id="googleMap"> </div>
        </div>
      </div>
    </div>
  </div>

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
  <!-- slider Script -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/service-thumbnail.js"></script>
  <script src="js/testimonial-single.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyAem5msWQ7lwn0NHLu7ImZJ84CcBIbHxp0"></script>
  <script type="text/javascript" src="js/location.js"></script>
</body>

</html>