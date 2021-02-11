<h2>LE LUNGHE</h2>
<div class="pasta lunga d-flex flex-wrap">
    @foreach ($paste as $pasta)
    @if($pasta['tipo'] == 'lunga')
        <img src="{{ $pasta['src'] }}" alt="">
    @endif
    @endforeach
</div>
<h2>LE CORTE</h2>
<div class="pasta corta d-flex flex-wrap">
    @foreach ($paste as $pasta)
    @if($pasta['tipo'] == 'corta')
        <img src="{{ $pasta['src'] }}" alt="">
    @endif
    @endforeach
</div>
<h2>LE CORTISSIME</h2>
<div class="pasta cortissima d-flex flex-wrap">
    @foreach ($paste as $pasta)
    @if($pasta['tipo'] == 'cortissima')
        <img src="{{ $pasta['src'] }}" alt="">
    @endif
    @endforeach
</div>