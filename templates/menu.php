<div class="navigation">
    <!-- navigation-start -->

    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><img class="img-responsive" src="images/logo.svg" alt="Rpilates.cz"></a>
      </div>
      <div class="navbar-right">
        <div id="navigation">
          <ul>
            <li <?php echo ($page == 'index') ? "class='active'" : ""; ?> >
                <a href="index.php">Úvod</a>
            </li>
            <li <?php echo ($page == 'about') ? "class='active'" : ""; ?>>
                <a href="o-me.php">O mě</a></li>
            <li <?php echo ($page == 'gallery') ? "class='active'" : ""; ?>> 
                <a href="galerie.php">Galerie </a>
            </li>
            <li <?php echo ($page == 'service') ? "class='active'" : ""; ?>> 
                <a href="sluzby.php">Služby </a>
              <ul>
                <li><a href="sluzby-rehabilitace.php">Rehabilitace</a></li>
                <li><a href="sluzby-sportovni-fyzio.php">Sportovní fyzioterapie</a></li>
                <li><a href="sluzby-masaze.php">Masáže</a></li>
                <li><a href="sluzby-skupinove-cviceni.php">Skupinové zdravotní cvičení</a></li>
                <li><a href="sluzby-pilates-joga.php">Pilates - joga - powerjoga</a></li>
                <li><a href="sluzby-kurzy.php">Poradenství - víkendové kurzy</a></li>
              </ul>
            </li>
            <li <?php echo ($page == 'pricing') ? "class='active'" : ""; ?>> 
                <a href="cenik.php">Ceník &amp; Rezervace</a>
            </li>            
            <li <?php echo ($page == 'contact') ? "class='active'" : ""; ?>> 
                <a href="kontakt.php">Kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.container-end -->

  </div>
  <!-- /.navigation-end -->