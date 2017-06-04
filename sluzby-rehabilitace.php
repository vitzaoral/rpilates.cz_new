<!DOCTYPE html>
<html lang="cs">

<head>
  <!-- head -->
  <?php $title = 'Služby - rehabilitace'; include "templates/head.php" ?>
</head>

<body>
  <!-- menu -->
  <?php $page = 'service'; include "templates/menu.php" ?>

  <div class="page-header">
    <!-- page-header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-title">
          <h1>Rehabilitace</h1>
        </div>
        <div class="col-md-12">
          <!-- breadcrumb -->
          <ol class="breadcrumb">
            <li><a href="index.php">Úvod</a></li>
            <li><a href="sluzby.php">Seznam služeb</a></li>
            <li class="active">Rehabilitace</li>            
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
              <p class="lead">Při terapii využívám širokou paletu terapeutických konceptů, metod a technik, ve kterých jsem byla odborně
                vzdělána a proškolena.</p>
              <p>Mým cílem je poskytnout Vám maximum terapeutických možností pro příznivé ovlivnění akutního či chronického
                stavu onemocnění Vašeho pohybového aparátu. Standardem léčby je odborné fyzioterapeutické vyšetření (tzv.
                kineziologický rozbor), na jehož základě se stanovují následné terapeutické cíle a vybírají vhodné terapeutické
                postupy.
              </p>
              <p class="lead">Prostřednictvím individuální terapie se zaměřuji na níže uvedené indikační skupiny u dětí i dospělých</p>
              <ul class="listnone circle-right">
                <li>Akutní a chronické bolestivé stavy pohybového aparátu (páteře, kloubů, svalů, svalových úponů, šlach a svalů)</li>
                <li>Obtíže spojené s funkčními poruchami pohybového aparátu (kloubní blokády, svalové spazmy, problematika jizev)</li>
                <li>Stavy po traumatických postiženích (stavy po zlomeninách, poranění vazů, šlach a svalů, stavy po úrazech
                  a operacích páteře)</li>
                <li>Ortopedická a revmatologická onemocnění (skolióza, degenerativní onemocnění – artrózy nosných kloubů, revmatoidní
                  artritida, Bechtěrevova nemoc)</li>
                <li>Gynekologické problémy s příčinnou potíží na úrovni pohybového aparátu (bolestivá menstruace, funkční sterilita
                  žen, močová inkontinence, bolestivá kostrč)</li>
                <li>Individuální terapie v průběhu těhotenství a po porodu</li>
                <li>Vadné držení těla u dětí</li>
                <li>Neurologická onemocnění (stav po cévní mozkové příhodě, roztroušená skleróza, stavy po obrnách periferních
                  nervů, např. lícního nervu, výhřezy plotének s případným útlakem nervu)</li>
              </ul>
              <p class="lead">Nabídka</p>
              <ul class="listnone circle-right">
                <li>Vyšetření (kineziologický rozbor, orientační neurologické a ortopedické vyšetření) </li>
                <li>Individuální terapie trvající 30 min, 45 min nebo 60 min (dle domluvy a rozsahu obtíží)</li>
              </ul>
              <div class="service-img zoom-pic"> <img src="images/service-8.jpg" alt="" class="img-responsive"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 sidebar">
           <!-- sidebar menu -->
           <?php $page = 'service1'; $info = 'rehabilitace'; include "templates/service-menu.php" ?>
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