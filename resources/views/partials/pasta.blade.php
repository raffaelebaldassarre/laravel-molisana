<h2>{{$title}}</h2>
<div class="pasta lunga d-flex flex-wrap">
    @foreach ($pasta as $value)
    @if($value['tipo'] == $tipo)
    <div class="card">
        <img src="{{ $value['src'] }}" alt="">
        <div class="overlay d-flex">
            <img src="{{ asset('/img/icon.svg') }}" alt="">
            <p>{{ $value['titolo'] }}</p>
            <p>{{ $value['cottura'] }}</p>
        </div>
    </div>
    @endif
    @endforeach
</div>