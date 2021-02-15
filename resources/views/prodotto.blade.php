@extends('layouts.app')
@section('title')
La Molisana | {{ $prodotto['titolo'] }}
@endsection
@section('content')
    <main>
        <div class="container_prodotto">
            <div class="card_prodotto">
                <img src="{{ $prodotto['src-p'] }}" alt="">
            </div>
            <div class="card_prodotto_descrizione">
                <p>{!! $prodotto['descrizione'] !!}</p>
            </div>
        </div>
    </main>
@endsection