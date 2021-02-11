<h2>LE LUNGHE</h2>
<div class="pasta lunga d-flex flex-wrap">
    @foreach ($paste as $pasta)
    @if($pasta['tipo'] == 'lunga')
    <div class="card">
        <img src="{{ $pasta['src'] }}" alt="">
        <div class="overlay">
            <img src="{{ asset('/img/icon.svg') }}" alt="">
        </div>
    </div>
    @endif
    @endforeach
</div>
<h2>LE CORTE</h2>
<div class="pasta corta d-flex flex-wrap">
    @foreach ($paste as $pasta)
    @if($pasta['tipo'] == 'corta')
    <div class="card">
        <img src="{{ $pasta['src'] }}" alt="">
        <div class="overlay">
            <img src="{{ asset('/img/icon.svg') }}" alt="">
        </div>
    </div>
    @endif
    @endforeach
</div>
<h2>LE CORTISSIME</h2>
<div class="pasta cortissima d-flex flex-wrap">
    @foreach ($paste as $pasta)
    @if($pasta['tipo'] == 'cortissima')
    <div class="card">
        <img src="{{ $pasta['src'] }}" alt="">
        <div class="overlay">
            <img src="{{ asset('/img/icon.svg') }}" alt="">
        </div>
    </div>
    @endif
    @endforeach
</div>