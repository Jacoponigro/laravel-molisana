<?php
$data = config('pasta');
$lunga = [];
$corta = [];
$cortissima = [];
foreach ($data as $pasta) {
  if ($pasta["tipo"] == "lunga") {
    $lunga[] = $pasta;
  }
  else if ($pasta["tipo"] == "corta") {
    $corta[] = $pasta;
  }
  else if ($pasta["tipo"] == "cortissima") {
    $cortissima[] = $pasta;
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>molisana</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <body>
    <!-- header -->
    <header>
      <div class="logo-container">
        <img class="logo" src="{{asset('img/logo.png')}}" alt="">
      </div>
      <div class="header-nav">
        <ul class="nav-list">
          <li><a href="#">HOME</a></li>
          <li><a href="#">PRODOTTI</a></li>
          <li><a href="#">NEWS</a></li>
        </ul>
      </div>
    </header>
    <!-- /header -->
    <!-- main -->
    <main>
      <h2>Le Lunghe</h2>
      <ul class="pasta-list">
        <?php foreach ($lunga as $pasta): ?>
          <li>
            <img class="pasta-img" src="{{$pasta["src"]}}" alt="">
          </li>
        <?php endforeach; ?>
      </ul>
      <h2>Le Corte</h2>
      <ul class="pasta-list">
        <?php foreach ($corta as $pasta): ?>
          <li>
            <img class="pasta-img" src="{{$pasta["src"]}}" alt="">
          </li>
        <?php endforeach; ?>
      </ul>
      <h2>Le Cortissime</h2>
      <ul class="pasta-list">
        <?php foreach ($cortissima as $pasta): ?>
          <li>
            <img class="pasta-img" src="{{$pasta["src"]}}" alt="">
          </li>
        <?php endforeach; ?>
      </ul>
    </main>
    <!-- /main -->
    <!-- footer -->
    <footer>
      <div class="contacts-container">
        <img src="" alt="">
        <ul class="contacts">
          <li>Ragione sociale: La Molisana S.P.A.<li>
          <li>Sede legale: Contrada Colle delle Api, 100/A - 86100 - Campobasso (CB)<li>
          <li>Pec: lamolisana@pec.it<li>
          <li>Tel: +39 0874 4981<li>
          <li>Fax: +39 0874 629584<li>
          <li>Per segnalazioni scrivere a:
          <li>info@lamolisana.it<li>
          <li>Per contattare l'area commerciale:
          <li>commerciale@lamolisana.it<li>
          <li>Per contattare l'area export:
          <li>export@lamolisana.it<li>
        </ul>
      </div>
      <div class="prodotti-pastificio">
        <ul class="prodotti">
          <li>Il Pastificio</li>
          <li>Grano decorticato a pietra</li>
          <li>Il Molise c'è</li>
          <li>Filiera integrata</li>
          <li>100 anni di pasta</li>
          <li>Storia della pasta</li>
          <li>Spaghetto quadrato</li>
          <li>Le persone</li>
        </ul>
        <ul class="pastificio">
          <li>Le classiche</li>
          <li>Le speciali</li>
          <li>Le integrali</li>
          <li>Le biologiche</li>
          <li>Le gluten-free</li>
          <li>Le extra-lusso</li>
          <li>Le semole</li>
        </ul>
        <div class="chef-collection-container">
          <ul class="chef-collection">
            <li>Collezione da chef</li>
            <li>Grandi cucine</li>
            <li>Biologiche</li>
            <li>Quadrate</li>
          </ul>
        </div>

      </div>
    </footer>
    <!-- /footer -->
  </body>
</html>
