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
  <?php $page = 'service'; include "templates/menu.php" ?>

  <div class="page-header">
    <!-- page-header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-title">
          <h1>Masáže</h1>
        </div>
        <div class="col-md-12">
          <!-- breadcrumb -->
          <ol class="breadcrumb">
            <li><a href="index.php">Úvod</a></li>            
            <li><a href="sluzby.php">Seznam služeb</a></li>
            <li class="active">Masáže</li>
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
              <p class="lead">Masáže jsou vhodným prostředkem ke zmírňování bolesti, napětí a stresu.</p>
              <p>Pomáhají zlepšit krevní oběh a uvolňují napětí organizmu. Nabízím masáže celkové – celotělové – obvyklá délka
                procedury je 60 minut, nebo částečné (oblasti šíje, zad, dolních končetin, plosky, pánve, hrudníku, břicha)
                s obvyklou délkou procedury 30 minut. Masáže je vhodné kombinovat s procedurami termoterapie (předehřátí
                za pomoci rašelinových sáčků, lávových kamenů, gelových sáčků) a aromaterapie.
              </p>
              <p class="lead">Druhy masáží</p>
              <ul class="listnone circle-right">
                <li>Masáže klasické</li>
                <li>Masáže reflexní</li>
                <li>Masáže sportovní</li>
                <li>Masáže horkými lávovými kameny</li>               
              </ul>              
              <div class="service-img zoom-pic"> <img src="images/service-8.jpg" alt="" class="img-responsive"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4 sidebar">
          <!-- sidebar -->
          <div class="row">
            <div class="col-md-12">
              <div class="widget service">
                <!-- service -->
                <h2 class="widget-title">Seznam služeb</h2>
                <ul class="listnone chevron-circle-right">
                  <li><a href="#">Rehabilitace</a></li>
                  <li><a href="#"> Sportovní fyzioterapie</a></li>
                  <li class="active"><a href="#">Masáže</a></li>
                  <li><a href="#">Skupinové zdravotní cvičení</a></li>
                  <li><a href="#">Pilates – jóga – powerjóga</a></li>
                  <li><a href="#">Poradenství – víkendové kurzy</a></li>
                </ul>
              </div>
              <!-- /.service -->
            </div>
            <div class="col-md-12">
              <div class="widget widget-price">
                <!-- service -->
                <h2 class="widget-title">Ceník a rezervace</h2>
                <p>Více informací o ceně masáží zjistíte v ceníku</p>
                <a href="#" class="btn btn-default hvr-sweep-to-right">Ceník a rezervace ></a>
              </div>
              <!-- /.service -->
            </div>
          </div>
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