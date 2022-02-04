<?php

$htmloutput = <<<EOD
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Sentiero Fossa della neve</h2>
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
                <img src="/assets/img/portfolio/sentiero-fossa-della-neve-mappa.jpg" alt="">
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
              <li><strong>Distanza</strong>: 2,8 Km</li>
              <li><strong>Dislivello positivo</strong>: 223m D+</li>
              <li><strong>Dislivello negativo</strong>: 37m D-</li>
              <li><strong>Quota Min/Max</strong>: 732m / 925m</li>
              <li><strong>Difficoltà</strong>: Bassa/media</li>
              <li><strong>Percorribilità</strong>: A piedi e mountain bike</li>
              <li><strong>Presenza acqua</strong>: No</li>
              <li><strong>Scarica traccia per GPS</strong>: <a href="/assets/gpx/sentiero-fossa-della-neve.gpx" class="button">SCARICA GPX</a></li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>Descrizione</h2>
            <p>
            Da Cisterna Faggitiello si imbocca un sentiero che attraversa la parte alta di Costa Grande,
            dove si incontrano, oltre alla vegetazione mista tipica della foresta, anche splendidi esemplari
            di nocciolo selvatico. Il sentiero prosegue fino ad un’altezza di circa 950 metri portando il
            visitatore a Fossa Della Neve, uno dei luoghi più antichi della foresta. Da qui, imboccando
            un breve sentiero in salita, si arriva alla cosiddetta "Caurarina" o Calvarina, il punto più alto della foresta
            (973m s.l.m).
            Il nome “Fossa della Neve” deriva dalle fosse, le cosiddette neviere, che in questa località
            venivano scavate per la conservazione della neve, pratica diffusa fino agli anni ’30 del
            ’900. La neve veniva posata in strati di circa un metro di altezza coperti ognuno da uno
            strato di felci e foglie di faggio e infine da abbondante terreno. Nei mesi estivi le fosse
            venivano aperte e la neve, trasformatasi in ghiaccio, veniva inviata al paese a dorso di
            mulo. Il ghiaccio veniva impiegato per usi alimentari e medici: serviva per preparare sorbetti
            e bevande, conservare i cibi, e utilizzato come riserva di acqua potabile per i tempi di
            siccità, per curare febbri, ascessi, contusioni.
            Alcune delle fosse utilizzate in passato sono ancora visibili e una di esse contiene oggi
            le acque di un piccolo lago, comparso negli anni ’90 contemporaneamente al prosciugarsi
            del pozzo situato in località Piano del Pozzo. A Fossa della Neve si incontrano anche gli
            alberi più antichi della foresta, tra cui alcuni faggi vecchi 300 anni.<br><br>
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
