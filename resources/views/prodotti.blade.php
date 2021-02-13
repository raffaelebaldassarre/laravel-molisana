@extends('layouts.app')
@section('title')
La Molisana | Prodotti
@endsection
@section('content')
    <main>
        <div class="container">
            @include('partials.pasta',['title' => "LE LUNGHE", 'tipo' => "lunga"])
            @include('partials.pasta',['title' => "LE CORTE", 'tipo' => "corta"])
            @include('partials.pasta',['title' => "LE CORTISSIME", 'tipo' => "cortissima"])
        </div>
    </main>
@endsection