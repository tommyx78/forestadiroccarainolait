<?php

$htmloutput= <<<EOD
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <h1 class="text-light"><a href="index.html">Foresta di Roccarainola</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="/index.php#hero">Home</a></li>
        <li class="dropdown"><a href="#"><span>La foresta</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="/index.php#foresta">Informazioni</a></li>
              <li><a class="nav-link scrollto" href="/index.php#flora">La flora</a></li>
              <li><a class="nav-link scrollto" href="/index.php#fauna">La fauna</a></li>
              <li><a class="nav-link scrollto" href="/index.php#comearrivare">Orari di apertura</a></li>
              <li><a class="nav-link scrollto" href="/blog/alla-scoperta-della-foresta-di-roccarainola.html">La foresta raccontata</a></li>
            </ul>
          </li>










        <li><a class="nav-link scrollto" href="/index.php#about">I sentieri</a></li>
        <li><a class="nav-link scrollto" href="/index.php#portfolio">Fotografie</a></li>
        <li><a class="nav-link scrollto" href="/index.php#progetto">Progetto web</a></li>
        <li><a class="nav-link scrollto" href="/index.php#contact">Contatti</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
EOD;

echo $htmloutput;
?>
