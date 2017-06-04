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

  <link href="css/animate.css" rel="stylesheet">
  <link href="css/jquery.datepick.css" rel="stylesheet">

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
  <?php $page = 'contact'; include "templates/menu.php" ?>

  <div class="page-header">
    <!-- page-header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 page-title">
          <h1>Kontakt</h1>
        </div>
        <div class="col-md-12">
          <!-- breadcrumb -->
          <ol class="breadcrumb">
            <li><a href="index.php">Úvod</a></li>
            <li class="active">Kontakt</li>
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
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <p class="lead">Pokud máte nějaký dotaz, vyplňte prosím tento formulář:</p>
            </div>
            <div class="col-md-12 application-form">
              <form method="post" id="emailForm">
                <div class="row">
                  <!-- Text input-->
                  <div class="col-md-6 form-group">
                    <label class="control-label" for="fname">Jméno<span class="required">*</span></label>
                    <input id="fname" name="fname" type="text" placeholder="" class="form-control input-md" required>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6 form-group">
                    <label class="control-label" for="lname">Příjmení<span class="required">*</span></label>
                    <input id="lname" name="lname" type="text" placeholder="" class="form-control input-md" required>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6 form-group">
                    <label class="control-label" for="phone">Telefon<span class="required">*</span></label>
                    <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" required>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6 form-group">
                    <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                    <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required>
                  </div>

                  <!-- Textarea -->
                  <div class="col-md-12 form-group">
                    <label class="control-label" for="message">Vaše zpráva<span class="required">*</span></label>
                    <textarea class="form-control" id="message" name="message" rows="9" required></textarea>
                  </div>
                  <!-- Button -->
                  <div class="col-md-12 form-group">
                    <button type="submit" id="submit" name="submit" class="btn btn-default">Odeslat</button>
                    <span class="required pull-right"><small>*Nutné vyplnit</small></span> </div>
                </div>
              </form>
              <div id="messages" class="hide" role="alert">               
                <div id="messages_content"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 sidebar">
          <div class="row">
            <div class="col-md-12">
              <div class="widget">
                <h2>Kontakty</h2>
                <h3 class="small-title">Rpilates</h3>
                <p>Mgr. Jarmila Štěpánová</p>
                <h3 class="small-title">Adresa:</h3>
                <p>Lhotka 629, Bohuňovice, 783 14</p>
                <h3 class="small-title">E-mail:</h3>
                <p><a href="mailto:rpilates@seznam.cz">rpilates@seznam.cz</a></p>
                <h3 class="small-title">phone: </h3>
                <p>+420 774 988 156</p>
                <span id="view-map" class="btn btn-default btn-sm" onclick="smothScroll('#map')">Zobrazit na mapě</span>
              </div>
            </div>
            <div class="col-md-12">
              <div class="widget">
                <h2>Parkování</h2>
                <p>Před provozovnou je vyhrazeno pouze jedno parkovací místo. Při skupinových cvičeních doporučuji zaparkovat
                  na ulici Loděnická.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.main-container -->

  <div id="map">
    <div class="row">
      <div class="col-md-12 location-map-contact">
        <div class="map" id="googleMap"> </div>
      </div>
    </div>
  </div>

  <div class="footer">
    <!-- footer -->
    <div class="container">
      <div class="row footer-section">
        <!-- footer section -->
        <div class="col-md-3 footer-block"> <img src="images/footer-logo.png" alt="">
          <p>Rehabilitační ambulance, která nabízí osobní a odborný přístup k Vašim problémům. Těšíme se na Vás. TODO.</p>
        </div>
        <div class="col-md-3 footer-block">
          <h3>Naše služby</h3>
          <ul class="listnone">
            <li><a href="#">Rehabilitace</a></li>
            <li><a href="#">Sportovní fyzioterapie</a></li>
            <li><a href="#">Masáže</a></li>
            <li><a href="#">Skupinové zdravotní cvičení</a></li>
            <li><a href="#">Pilates - joga - powerjoga</a></li>
            <li><a href="#">Poradenství - víkendové kurzy</a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-block">
          <h3>Provozní doba</h3>
          <div><strong>Po - Pá</strong> 8:00 - 16:00 </div>
          <div><strong>So:</strong> dle domluvy </div>
        </div>
        <div class="col-md-3 footer-block">
          <h3>Adresa</h3>
          <p>Lhotka 629, Bohuňovice, 783 14</p>
          <p>+420 774 988 156</p>
          <p><a href="mailto:rpilates@seznam.cz">rpilates@seznam.cz</a></p>
        </div>
      </div>
      <!-- /.footer section -->
      <div class="row tiny-footer">
        <!-- tiny-footer-->
        <div class="col-md-6 copyright">Copyright @ 2017 Rpilates.cz</div>
        <div class="col-md-6 soical-block">
          <ul class="listnone">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- /.tiny-footer-->
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <!-- script Header -->
  <script type="text/javascript" src="js/script.js"></script>
  <!-- sticky Header -->
  <script type="text/javascript" src="js/jquery.sticky.js"></script>
  <script type="text/javascript" src="js/sticky-header.js"></script>

  <script src="js/jquery.plugin.js" type="text/javascript"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyAem5msWQ7lwn0NHLu7ImZJ84CcBIbHxp0"></script>
  <script type="text/javascript" src="js/location.js"></script>

  <script type="text/javascript">
    $('#emailForm').submit(function (e) {

      var thisForm = '#emailForm';
      $('#messages').hide();

      // schovam odesilaci tlacitko
      $(thisForm).find('input[type="submit"]').hide();

      // zabranim reloadu
      if (e.preventDefault) e.preventDefault();
      else e.returnValue = false;

      // samotne odeslani emailu
      jQuery.ajax({
        type: "POST",
        // TODO zmenit URL
        url: "php/mail.php",
        data: $(thisForm).serialize(),

        success: function (response) {
          // zobrazim odesilaci tlacitko
          $(thisForm).find('input[type="submit"]').show();

          // check result
          if ($.isNumeric(response)) {
            if (parseInt(response) > 0) {
              // v priade uspechu to vraci 1
              $('#messages').removeClass('hide').addClass('alert alert-success').slideDown().show();
              $('#messages_content').html('<span>Váš dotaz byl v pořádku odeslán.</span>');
              // vycistim form
               $(thisForm).trigger('reset');
            }
          }
          // neco se nepovedlo
          else {
            $('#messages').removeClass('hide').addClass('alert alert-danger').slideDown().show();
            $('#messages_content').html('<span>Odeslání dotazu se bohužel nepovedlo. Zkuste to prosím znovu.</span>');
          }
        },

        error: function (errorObject, errorText, errorHTTP) {
          // spadlo pri POSTU
          $('#messages').removeClass('hide').addClass('alert alert-danger').slideDown().show();
          $('#messages_content').html('<span>Odeslání dotazu se bohužel nepovedlo. Zkuste to prosím znovu.</span>');
          
          // zobrazim odesilaci tlacitko
          $(thisForm).find('input[type="submit"]').show();
        }
      });
    });
  </script>

</body>

</html>