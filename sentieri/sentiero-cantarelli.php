<?php

$htmloutput = <<<EOD
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Sentiero Cantarelli</h2>
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
                <img src="/assets/img/portfolio/sentiero-cantarelli-mappa.jpg" alt="">
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
              <li><strong>Distanza</strong>: 2,7 Km</li>
              <li><strong>Dislivello positivo</strong>: 266m D+</li>
              <li><strong>Dislivello negativo</strong>: 10m D-</li>
              <li><strong>Quota Min/Max</strong>: 106m / 362m</li>
              <li><strong>Difficoltà</strong>: Bassa</li>
              <li><strong>Percorribilità</strong>: A piedi e mountain bike</li>
              <li><strong>Presenza acqua</strong>: No</li>
              <li><strong>Scarica traccia per GPS</strong>: <a href="/assets/gpx/sentiero-cantarelli.gpx" class="button">SCARICA GPX</a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>Descrizione</h2>
            <p>
            Partendo da Gargani, frazione di Roccarainola, si costeggia la località detta Finocchiara
            e ci si inoltra nella località chiamata Cantarelli, dove domina la roverella, seguendo il
            percorso ci si immette sulla strada che porta al Vivaio.<br><br>
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
