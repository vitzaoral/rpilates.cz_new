<!-- sidebar -->
<div class="row">
  <div class="col-md-12">
    <div class="widget service">
      <!-- service -->
      <h2 class="widget-title">Seznam služeb</h2>
      <ul class="listnone chevron-circle-right">
        <li <?php echo ($page == 'service1') ? "class='active'" : ""; ?>>
          <a href=<?php echo SERVICE1 ?>>Rehabilitace</a>
        </li>
        <li <?php echo ($page == 'service2') ? "class='active'" : ""; ?>>
          <a href=<?php echo SERVICE2 ?>> Sportovní fyzioterapie</a>
        </li>
        <li <?php echo ($page == 'service3') ? "class='active'" : ""; ?>>
          <a href=<?php echo SERVICE3 ?>>Masáže</a>
        </li>
        <li <?php echo ($page == 'service5') ? "class='active'" : ""; ?>>
          <a href=<?php echo SERVICE4 ?>>Skupinové zdravotní cvičení</a>
        </li>
        <li <?php echo ($page == 'service7') ? "class='active'" : ""; ?>>
          <a href=<?php echo SERVICE5 ?>>Pilates – jóga – powerjóga</a>
        </li>
        <li <?php echo ($page == 'service8') ? "class='active'" : ""; ?>>
          <a href=<?php echo SERVICE6 ?>>Poradenství – víkendové kurzy</a>
        </li>
      </ul>
    </div>
    <!-- /.service -->
  </div>
  <div class="col-md-12">
    <div class="widget widget-price">
      <!-- service -->
      <h2 class="widget-title">Ceník a rezervace</h2>
      <p>Více informací o ceně <?php echo $info ?> zjistíte v ceníku</p>
      <a <a href=<?php echo PRICING . "#" . $page ?> class="btn btn-default hvr-sweep-to-right">Ceník a rezervace ></a>
    </div>
    <!-- /.service -->
  </div>
</div>