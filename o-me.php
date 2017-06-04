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

  <!-- icon css -->
  <link rel="stylesheet" type="text/css" href="css/flaticon.css">
  <!-- Template Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300,300italic' rel='stylesheet'
    type='text/css'>
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