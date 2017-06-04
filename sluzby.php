<!DOCTYPE html>
<html lang="cs">

<head>
  <!-- head -->
  <?php $title = 'Služby'; include "templates/head.php" ?>
</head>

<body>
  <!-- menu -->
  <?php $page = 'service'; include "templates/menu.php" ?>

  <div class="page-header">
    <!-- page-header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-title">
          <h1>Seznam nabízených služeb</h1>
        </div>
        <div class="col-md-12">
          <!-- breadcrumb -->
          <ol class="breadcrumb">
            <li><a href="index.php">Úvod</a></li>
            <li class="active">Seznam služeb</li>
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
          <h1>Mé nabízené služby</h1>
          <h5 class="small-title left">Seznam služeb</h5>
        </div>
        <div class="col-md-7">
          <p class="lead">Níže naleznete seznam služeb, které poskytuji. Více nformací o jednotlivých službách získáte pod jejich detaily.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 service-block animated" id="element-to-animate">
          <!-- service block -->
          <div class="row">
            <div class="col-md-offset-1 col-md-6 line service-desc">
              <h2><a href=<?php echo SERVICE1 ?> class="service-title">Rehabilitace</a></h2>
              <p>Při terapii využívám širokou paletu terapeutických konceptů, metod a technik, ve kterých jsem byla odborně
                vzdělána a proškolena. Mým cílem je poskytnout Vám maximum terapeutických možností pro příznivé ovlivnění
                akutního či chronického stavu onemocnění Vašeho pohybového aparátu. Standardem léčby je odborné fyzioterapeutické
                vyšetření (tzv. kineziologický rozbor), na jehož základě se stanovují následné terapeutické cíle a vybírají
                vhodné terapeutické postupy.</p>
              <a href=<?php echo SERVICE1 ?> class="btn btn-default hvr-sweep-to-right">Zjistit více ></a>
            </div>
            <div class="col-md-5">
              <!-- service-pic-->
              <div class="service-img zoom-pic"> <a href=<?php echo SERVICE1 ?>><img src="images/service-1.jpg" alt="" class="img-responsive"></a> </div>
            </div>
            <!-- service-pic-->
          </div>
        </div>
        <!-- service block -->
        <div class="col-md-12 service-block animated" id="element-to-animate2">
          <!-- service block -->
          <div class="row">
            <div class="col-md-5">
              <div class="service-img zoom-pic">
                <!-- service-pic-->
                <a href=<?php echo SERVICE2 ?>><img src="images/service-2.jpg" alt="" class="img-responsive"></a> </div>
            </div>
            <!-- /.service-pic-->
            <div class="col-md-offset-1 col-md-6 line-left service-desc">
              <h2><a href=<?php echo SERVICE2 ?> class="service-title">Sportovní fyzioterapie</a></h2>
              <p>Sportovní fyzioterapie je určena profesionálním i amatérským sportovcům, kteří chtějí zvyšovat svoji výkonnost
                na profesionální úrovni. Chtějí předcházet zranění, přetížení, správně posilovat a regenerovat. Pomohu i
                s léčbou sportovních úrazů pro rychlejší návrat do tréninkového procesu.</p>
              <a href=<?php echo SERVICE2 ?> class="btn btn-default hvr-sweep-to-right">Zjistit více ></a> </div>
          </div>
        </div>
        <!-- service block -->
        <div class="col-md-12 service-block">
          <!-- service block -->
          <div class="row">
            <div class="col-md-offset-1 col-md-6 line service-desc">
              <h2><a href=<?php echo SERVICE3 ?> class="service-title">Masáže</a></h2>
              <p>Masáže jsou vhodným prostředkem ke zmírňování bolesti, napětí a stresu. Pomáhají zlepšit krevní oběh a uvolňují
                napětí organizmu. Nabízím masáže celkové – celotělové – obvyklá délka procedury je 60 minut, nebo částečné
                (oblasti šíje, zad, dolních končetin, plosky, pánve, hrudníku, břicha) s obvyklou délkou procedury 30 minut.
                Masáže je vhodné kombinovat s procedurami termoterapie (předehřátí za pomoci rašelinových sáčků, lávových
                kamenů, gelových sáčků) a aromaterapie.</p>
              <a href=<?php echo SERVICE3 ?> class="btn btn-default hvr-sweep-to-right">Zjistit více ></a> </div>
            <div class="col-md-5">
              <!-- service-pic-->
              <div class="service-img zoom-pic"> <a href=<?php echo SERVICE3 ?>><img src="images/service-3.jpg" alt="" class="img-responsive"></a> </div>
            </div>
            <!-- service-pic-->
          </div>
        </div>
        <!-- service block -->
        <div class="col-md-12 service-block">
          <!-- service block -->
          <div class="row">
            <div class="col-md-5">
              <div class="service-img zoom-pic">
                <!-- service-pic-->

                <a href=<?php echo SERVICE4 ?>><img src="images/service-4.jpg" alt="" class="img-responsive"></a> </div>
            </div>
            <!-- /.service-pic-->
            <div class="col-md-offset-1 col-md-6 line-left service-desc">
              <h2><a href=<?php echo SERVICE4 ?> class="service-title">Skupinové zdravotní cvičení</a></h2>
              <p>Nabízím sestavy rehabilitačního cvičení - na velkých míčích, pro bolavá záda, cvičení těhotných žen a žen po
                porodu, cvičení pánevního dna a další.</p>
              <a href=<?php echo SERVICE4 ?> class="btn btn-default hvr-sweep-to-right">Zjistit více ></a> </div>
          </div>
        </div>
        <!-- service block -->
        <div class="col-md-12 service-block">
          <!-- service block -->
          <div class="row">
            <div class="col-md-offset-1 col-md-6 line service-desc">
              <h2><a href=<?php echo SERVICE5 ?> class="service-title">Pilates – jóga – powerjóga</a></h2>
              <p>Aby byly jóga či Pilates cvičeny správně, je velice důležité naučit se vnímat základní principy cvičení (dýchání,
                koncentrace, centrace, plynulost, přesnost) a používat je automaticky při každém cviku z jednotlivých sestav.
                Je důležité, aby cvičení bylo odborně vedeno a kontrolováno. Pokud se technika cvičení Pilates i jógy neprovádí
                bez precizního zařazení základních principů, stává se cvičení nebezpečným a může klientovi přivodit zdravotní
                problémy, eventuálně zhoršit jeho aktuální stav. Pokud ale pochopíte a přijmete základní principy, tak vám
                toto cvičení pomůže změnit tělesný vzhled i duševní rozpoložení.</p>
              <a href=<?php echo SERVICE5 ?> class="btn btn-default hvr-sweep-to-right">Zjistit více ></a> </div>
            <div class="col-md-5">
              <!-- service-pic-->
              <div class="service-img zoom-pic"> <a href=<?php echo SERVICE5 ?>><img src="images/service-5.jpg" alt="" class="img-responsive"></a> </div>
            </div>
            <!-- service-pic-->
          </div>
        </div>
        <!-- service block -->
        <div class="col-md-12 service-block">
          <!-- service block -->
          <div class="row">
            <div class="col-md-5">
              <div class="service-img zoom-pic">
                <!-- service-pic-->
                <a href=<?php echo SERVICE6 ?>><img src="images/service-6.jpg" alt="" class="img-responsive"></a> </div>
            </div>
            <!-- /.service-pic-->
            <div class="col-md-offset-1 col-md-6 line-left service-desc">
              <h2><a href=<?php echo SERVICE6 ?> class="service-title">Poradenství – víkendové kurzy</a></h2>
              <p>Nabízím Vám individuální či skupinové poradenství s fyzioterapeutem. Pořádám také víkendové vzdělávací kurzy</p>
              <a href=<?php echo SERVICE6 ?> class="btn btn-default hvr-sweep-to-right">Zjistit více ></a> </div>
          </div>
        </div>
        <!-- service block -->
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