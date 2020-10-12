@php
$cards = config('prodotti');

$lunghe = [];
$corte = [];
$cortissime = [];

foreach($cards as $card) {
    if($card['tipo'] == 'lunga') {
        $lunghe[] = $card;
    }
    elseif($card['tipo'] == 'corta') {
        $corte[] = $card;
    }
    elseif($card['tipo'] == 'cortissima') {
        $cortissime[] = $card;
    }
}

@endphp


@extends('layout.app')
@section('titolo', 'Prodotti')
@section('main')
        <div class="cards">
        <h2>le Lunghe</h2>
        @foreach($lunghe as $card)
            <div class="card"> 
                <h3>{{ $card['titolo'] }}</h3>
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            </div>
        @endforeach
        <h2>le Corte</h2>
        @foreach($corte as $card)
            <div class="card"> 
                <h3>{{ $card['titolo'] }}</h3>
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            </div>
        @endforeach
        <h2>le Cortissime</h2>
        @foreach($cortissime as $card)
            <div class="card"> 
                <h3>{{ $card['titolo'] }}</h3>
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            </div>
        @endforeach
        </div>
@endsection
        
           
       