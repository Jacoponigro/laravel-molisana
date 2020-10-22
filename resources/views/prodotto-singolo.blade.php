@extends("layouts.main")

@section("title")
  Prodotti
@endsection

@section('main-content')

    <h1>{{$pasta["titolo"]}}</h1>
    <img src="{{$product["src-h"]}}" alt="">
    <img src="{{$product["src-p"]}}" alt="">
    <p>
        {!!$product["descrizione"]!!}
    </p>
@endsection
