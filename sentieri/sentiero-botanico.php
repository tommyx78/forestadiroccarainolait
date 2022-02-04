<?php

$htmloutput = <<<EOD
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Sentiero Botanico</h2>
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
                <img src="/assets/img/portfolio/2.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="/assets/img/portfolio/sentiero-botanico-mappa.jpg" alt="">
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
              <li><strong>Distanza</strong>: 3 Km</li>
              <li><strong>Dislivello positivo</strong>: 260m D+</li>
              <li><strong>Dislivello negativo</strong>: 123m D-</li>
              <li><strong>Quota Min/Max</strong>: 350m / 516m</li>
              <li><strong>Difficoltà</strong>: Bassa</li>
              <li><strong>Viabilità</strong>: A piedi e mountain bike</li>
              <li><strong>Presenza acqua</strong>: No</li>
              <li><strong>Scarica traccia per GPS</strong>: <a href="/assets/gpx/sentiero-botanico.gpx" class="button">SCARICA GPX</a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>Descrizione</h2>
            <p>
            Partendo dall’ingresso di Fosso Agnone si svolta a destra dove comincia il sentiero che
            costeggia, da un lato, l’area di coltivazione sperimentale del castagno da frutto e, dall’altro,
            l’area pic-nic 1. Si procede attraversando per intero la località Costa di Pietra dove la
            vegetazione è composta prevalentemente dal ceduo misto di roverella, carpino bianco,
            carpino nero, orniello e acero.
            Il sottobosco, oltre che la presenza di felci, vede la predominanza della tipica macchia
            mediterranea (origano, alloro, biancospino,ecc…). Lasciata Costa di Pietra si giunge alla
            località conosciuta come Dottoriello, famosa per i suoi belvedere e gli scorci paesaggistici
            che consentono di ammirare, nelle giornate di sole, lo spettacolo del Golfo di Napoli.
            Proseguendo per gli ultimi 200m si entra in Costa Grande e, percorrendo un sentiero ben
            curato, si arriva al Vivaio.<br><br>
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
