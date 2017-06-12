<?php include "php/constants.php" ?>

<div class="navigation">
    <!-- navigation-start -->

    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href=<?php echo INDEX ?>><img class="img-responsive" src="images/logo.svg" alt="Rpilates.cz"></a>
      </div>
      <div class="navbar-right">
        <div id="navigation">
          <ul>
            <li <?php echo ($page == 'index') ? "class='active'" : ""; ?> >
                <a href=<?php echo INDEX ?>>Úvod</a>
            </li>
            <li <?php echo ($page == 'about') ? "class='active'" : ""; ?>>
                <a href=<?php echo ABOUT ?>>O mě</a></li>
            <li <?php echo ($page == 'gallery') ? "class='active'" : ""; ?>> 
                <a href=<?php echo GALLERY ?>>Galerie </a>
            </li>
            <li <?php echo ($page == 'service') ? "class='active'" : ""; ?>> 
                <a href=<?php echo SERVICE ?>>Služby </a>
              <ul>
                <li><a href=<?php echo SERVICE ?>>Seznam služeb</a></li>
                <li><a href=<?php echo SERVICE1 ?>>Rehabilitace</a></li>
                <li><a href=<?php echo SERVICE2 ?>>Sportovní fyzioterapie</a></li>
                <li><a href=<?php echo SERVICE3 ?>>Masáže</a></li>
                <li><a href=<?php echo SERVICE4 ?>>Skupinové zdravotní cvičení</a></li>
                <li><a href=<?php echo SERVICE5 ?>>Pilates - jóga - powerjóga</a></li>
                <li><a href=<?php echo SERVICE6 ?>>Poradenství - víkendové kurzy</a></li>
              </ul>
            </li>
            <li <?php echo ($page == 'pricing') ? "class='active'" : ""; ?>> 
                <a href=<?php echo PRICING ?>>Ceník &amp; Rezervace</a>
            </li>            
            <li <?php echo ($page == 'contact') ? "class='active'" : ""; ?>> 
                <a href=<?php echo CONTACT ?>>Kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.container-end -->

  </div>
  <!-- /.navigation-end -->