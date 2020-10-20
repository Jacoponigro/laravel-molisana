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
          <li></li>
          <li></li>
          <li></li>
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
  </body>
</html>
