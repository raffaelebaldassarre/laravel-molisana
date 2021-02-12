<h2>LE LUNGHE</h2>
<div class="pasta lunga d-flex flex-wrap">
    @foreach ($pasta as $value)
    @if($value['tipo'] == 'lunga')
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
<h2>LE CORTE</h2>
<div class="pasta corta d-flex flex-wrap">
    @foreach ($pasta as $value)
    @if($value['tipo'] == 'corta')
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
<h2>LE CORTISSIME</h2>
<div class="pasta cortissima d-flex flex-wrap">
    @foreach ($pasta as $value)
    @if($value['tipo'] == 'cortissima')
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