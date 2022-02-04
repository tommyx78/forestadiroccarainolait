<?php

$htmloutput = <<<EOD
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Sentiero Costarelle - Maio</h2>
        <ol>
          <li><a href="/index.php">Home</a></li>
          <li><a href="/index.php#about">Sentieri</a></li>
          <li>Dettaglio</li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              

              <div class="swiper-slide">
                <img src="/assets/img/portfolio/sentiero-costarelle-maio-mappa.jpg" alt="">
              </div>

              <!-- div class="swiper-slide">
                <img src="/assets/img/portfolio/portfolio-3.jpg" alt="">
              </div -->

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Caratteristiche</h3>
            <ul>
              <li><strong>Distanza</strong>: 1,3 Km</li>
              <li><strong>Dislivello positivo</strong>: 180m D+</li>
              <li><strong>Dislivello negativo</strong>: -10m D-</li>
              <li><strong>Quota Min/Max</strong>: 305m / 485m</li>
              <li><strong>Difficoltà</strong>: Bassa</li>
              <li><strong>Viabilità</strong>: A piedi e mountain bike</li>
              <li><strong>Presenza acqua</strong>: No</li>
              <li><strong>Scarica traccia per GPS</strong>: <a href="/assets/gpx/sentiero-costarelle-maio.gpx" class="button">SCARICA GPX</a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>Descrizione</h2>
            <p>
            Lasciato il Vivaio, si arriva al sentiero che, attraversando le cosiddette ”Costarelle”, vale
            a dire i fianchi della montagna, porta al versante meridionale del Monte Maio. Percorrendo
            boschi costituiti da specie diverse, con prevalenza di roverella, si giunge all’area
            pic-nic 3, attrezzata con tavoli e barbecue, a cui si può accedere anche direttamente
            da Roccarainola, attraverso una strada che porta ad uno degli ingressi principali della
            foresta. Il sentiero è quindi percorribile anche in senso inverso: dall’area pic-nic 3 fino
            alla strada che porta al Vivaio.<br><br>
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container"></div>
  </section>

</main><!-- End #main -->

EOD;
echo $htmloutput;

?>
