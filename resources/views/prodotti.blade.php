@extends('layouts.app')
@section('title')
La Molisana | Prodotti
@endsection
@section('content')
    <main>
        <div class="container flex-wrap">
            @include('partials.pasta')
        </div>
    </main>
@endsection