<!DOCTYPE html>
<html lang="cs">

<head>
  <!-- head -->
  <?php $title = 'Kontakt'; include "templates/head.php" ?>
</head>

<body>
  <!-- menu -->
  <?php $page = 'about'; include "templates/menu.php" ?>

  <div class="page-header">
    <!-- page-header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-title">
          <h1>Mgr. Jarmila Štěpánová</h1>
        </div>
        <div class="col-md-12">
          <!-- breadcrumb -->
          <ol class="breadcrumb">
            <li><a href="index.php">Úvod</a></li>
            <li class="active">O mě</li>
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
      <div class="row trainer-profile">
        <div class="col-md-4 trainer-block">
          <div class="trainer-pic zoom-pic"> <a href="#"> <img src="images/trainer-2.jpg" alt="" class="img-responsive"></a></div>
          <div class="trainer-caption">
            <h2>Mgr. Jarmila Štěpánová</h2>
            <span class="trainer-meta">fyzioterapeut</span> </div>
        </div>
        <div class="col-md-offset-1 col-md-7 profile-desciption">
          <h5 class="small-title left">O mě</h5>
          <p class="lead">Mojí alma mater se stala Fakulta tělesné kultury Univerzity Palackého v Olomouci, kde jsem vystudovala magisterský
            obor Fyzioterapie a bakalářský obor Aplikované pohybové aktivity, na který jsem navázala studiem doktorským.</p>
          <p>Propojení jmenovaných oborů mě předurčilo k zaměření se na oblast sportovní fyzioterapie a léčebné tělesné výchovy.
            K rozvoji mé fyzioterapeutické praxe přispěly zahraniční stáže ve sportovně rehabilitačním ústavu v Norsku a
            Velké Británii a následně praxe v České republice zahrnující zařízení ambulantního, nemocničního i lázeňského
            typu. </p>
          <h5 class="small-title left">S kým spolupracuji</h5>
          <div class="col-md-12">
            <ul class="listnone circle-right ">
              <li>Česká reprezentace neslyšících sportovců</li>
              <li>Fakulta tělesné kultury UPOL (výuka Pilates metody pro české i zahraniční studenty)</li>
              <li>Dámský házenkářský klub Zora Olomouc </li>
            </ul>
          </div>
          <div class="clear"></div>
          <h5 class="small-title left">Vzdělání a odborné kurzy</h5>
          <div class="col-md-12">
            <ul class="listnone circle-right ">
              <li>Osvědčení o výkonu zdravotnického povolání bez odborného dohledu (únor 2012)</li>
              <li>Kurz Diagnostika a terapie funkčních poruch pohybového systému</li>
              <li>Kurz Dynamické neuromuskulární stabilizace (koncept prof. Pavla Koláře)</li>
              <li>Kurz Vojtovy reflexní lokomoce „A“</li>
              <li>Kurz Medical taping concept</li>
              <li>Kurz Terapeutické cvičení na lanech – Redcord systém, program Neurac</li>
              <li>Instruktor Pilates metody, zaměření na Medical Pilates</li>
              <li>Instruktor powerjógy</li>
              <li>Instruktor nordic walking</li>
            </ul>
          </div>
          <a href=<?php echo SERVICE ?> class="btn btn-default hvr-sweep-to-right">Poskytované služby</a> </div>
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