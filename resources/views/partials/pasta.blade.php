<h2>{{$title}}</h2>
<div class="pasta lunga d-flex flex-wrap">
    @foreach ($pasta as $key => $value)
        @if($value['tipo'] == $tipo)
        <div class="card">
        <a href="{{ route('prodotto', $key) }}">
            <img src="{{ $value['src'] }}" alt="">
            <div class="overlay d-flex">
                <img src="{{ asset('/img/icon.svg') }}" alt="">
                <a href="{{ route('prodotto', $key) }}">
                    <h3>{{ $value['titolo'] }}</h3>
                </a>
                <p>Tempo cottura: {{ $value['cottura'] }}</p>
            </div>
        </a>
        </div>
        @endif
    @endforeach
</div>