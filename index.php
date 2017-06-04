<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="keywords" content="physio, physiotherapy, physiotherapist, sports injuries,HTML5,CSS3,Responsive,HTML Template,Accupuncture,massage,pilate,occupational Health"
  />
  <meta name="description" content="Physio plus is clean and simple website template that have a feature like each service have a detail page and Terapist trainer page, location page and also more feature.">
  <title>Physio Plus | Physiotherapy Responsive Website Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Template Style.css -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Template slider css -->
  <link href="css/owl.theme.css" rel="stylesheet">
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <!-- icon css -->
  <link rel="stylesheet" type="text/css" href="css/flaticon.css">
  <!-- Template Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <!-- menu -->
  <?php $page = 'index';
include "templates/menu.php" ?>

  <div id="slider" class="owl-carousel owl-theme">
    <!-- slider -->
    <div class="item"><img src="images/slider.jpg" alt="">
      <div class="container">
        <div class="col-md-6 slider-caption">
          <h1 class="slider-title">Sportovní fyzioterapie </h1>
          <p class="slider-description">Jsme rehabilitační ambulance zaměřená především na sportovní fyzioterapii.</p>
          <a href=<?php echo ABOUT ?> class="btn btn-default hvr-sweep-to-right">Více o nás</a> </div>
      </div>
    </div>
    <div class="item"> <img src="images/slider-2.jpg" alt="">
      <div class="container">
        <div class="col-md-6 slider-caption">
          <h1 class="slider-title">Poradenství / kurzy pro veřejnost </h1>
          <p class="slider-description">Připravuje poradenství a vzdělávací víkendové kurzy pro veřejnost.</p>
          <a href=<?php echo SERVICE ?> class="btn btn-default hvr-sweep-to-right">Podívejte se na naše služby</a> </div>
      </div>
    </div>
    <div class="item"><img src="images/slider-3.jpg" alt="">
      <div class="container">
        <div class="col-md-6 slider-caption">
          <h1 class="slider-title">Pilates / jóga / powerjoga</h1>
          <p class="slider-description">Poskytuje kompletní nabídku kurzů Pilates metody, jógy a powerjógy.</p>
          <a href=<?php echo GALLERY ?> class="btn btn-default hvr-sweep-to-right">Podívejte se, jak to u nás vypadá</a>          </div>
      </div>
    </div>
  </div>
  <!-- /.slider -->

  <div class="section-space">
    <div class="container">
      <div class="row trainer-profile">
        <div class="col-md-12 profile-desciption">
          <h5 class="small-title left">Vítejte na stránkách R pilates studia</h5>
          <p class="lead">Jsme rehabilitační ambulance zaměřená především na sportovní fyzioterapii</p>
          <p>TODO Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam feugiat, turpis at pulvinar vulputate, erat
            libero tristique tellus, nec bibendum odio risus sit amet ante. Nunc dapibus tortor vel mi dapibus sollicitudin.
            Integer tempor. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Maecenas lorem. Aenean fermentum
            risus id tortor. Nullam at arcu a est sollicitudin euismod.</p>
          <p>TODO Integer vulputate sem a nibh rutrum consequat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
            beatae vitae dicta sunt explicabo.</p>
        </div>
      </div>
    </div>
    <div class="section-space section-color">
      <div class="container">
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
                <a href=<?php echo SERVICE1 ?>><img src="images/service-1.jpg" alt="" class="img-responsive"></a>
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
                <a href=<?php echo SERVICE2 ?>><img src="images/service-2.jpg" alt="" class="img-responsive"></a>
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
                <a href=<?php echo SERVICE3 ?>><img src="images/service-4.jpg" alt="" class="img-responsive"></a>
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
                <a href=<?php echo SERVICE4 ?>><img src="images/service-3.jpg" alt="" class="img-responsive"></a>
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
                <a href=<?php echo SERVICE5 ?>><img src="images/service-5.jpg" alt="" class="img-responsive"></a>
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
                <a href=<?php echo SERVICE6 ?>><img src="images/service-6.jpg" alt="" class="img-responsive"></a>
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

    <div class="parallax-cta parallax parallax-2">
      <!-- parallax cta -->
      <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <h1>Mgr. Jarmila Štěpánová</h1>
            <p>Jmenuji se Jarmila Štěpánová a vítám Vás na svých stránkách R pilates studia.</p>
            <p>Mojí alma mater se stala Fakulta tělesné kultury Univerzity Palackého v Olomouci, kde jsem vystudovala magisterský
              obor <strong>Fyzioterapie</strong> a bakalářský obor <strong>Aplikované pohybové aktivity</strong>, na který
              jsem navázala studiem doktorským.</p>
            <p>Propojení jmenovaných oborů mě předurčilo k zaměření se na oblast sportovní fyzioterapie a léčebné tělesné výchovy.</p>
            <p>K rozvoji mé fyzioterapeutické praxe přispěly zahraniční stáže ve sportovně rehabilitačním ústavu v Norsku a
              Velké Británii a následně praxe v České republice zahrnující zařízení ambulantního, nemocničního i lázeňského
              typu.
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
                <p>Na jednotlivé programy se lze rezervovat online nebo telefonicky. Případné zrušení rezervovaného termínu
                  je třeba nahlásit minimálně 24 hodin předem na tel. čísle: 774 988 156.
                </p>
                <a href="#TODO" class="btn btn-default hvr-sweep-to-right"> Online rezervace</a>
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
                  <li class="list-group-item price-list">Joga, pilates, powerjoga skupinové<small>(privátní / veřejné, 60 min)</small>
                    <a href=<?php echo PRICING . "#service5" ?> class="btn hvr-sweep-to-right pull-right">Ceník >></a>
                  </li>
                  <li class="list-group-item price-list">Zdravotní cvičení na systému REDCORD<small>(privátní, 60 min)</small>
                    <a href=<?php echo PRICING . "#service7" ?> class="btn hvr-sweep-to-right pull-right">Ceník >></a>
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