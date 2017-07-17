<!DOCTYPE html>
<html lang="cs">

<head>
  <!-- head -->
  <?php $title = 'Kontakt'; include "templates/head.php" ?>
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
                <p><?php echo ADDRESS ?></p>
                <h3 class="small-title">E-mail:</h3>
                <p><a href="mailto:<?php echo EMAIL ?>"><?php echo EMAIL ?></a></p>
                <h3 class="small-title">Telefon: </h3>
                <p><?php echo PHONE ?></p>
                <h3 class="small-title">IČO: </h3>
                <p><?php echo ICO ?></p>
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