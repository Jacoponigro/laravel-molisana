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
@extends("layouts.main")

@section("title")
  Home
@endsection

@section("main-content")
    <main>
      <h2>LE LUNGHE</h2>
      <ul class="pasta-list">
        <?php foreach ($lunga as $pasta): ?>
          <li>
            <img class="pasta-img" src="{{$pasta["src"]}}" alt="">
          </li>
        <?php endforeach; ?>
      </ul>
      <h2>LE CORTE</h2>
      <ul class="pasta-list">
        <?php foreach ($corta as $pasta): ?>
          <li>
            <img class="pasta-img" src="{{$pasta["src"]}}" alt="">
          </li>
        <?php endforeach; ?>
      </ul>
      <h2>LE CORTISSIME</h2>
      <ul class="pasta-list">
        <?php foreach ($cortissima as $pasta): ?>
          <li>
            <img class="pasta-img" src="{{$pasta["src"]}}" alt="">
          </li>
        <?php endforeach; ?>
      </ul>
    </main>
  @endsection
