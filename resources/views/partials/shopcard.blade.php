@if (auth()->check())
    @php
        $cantidad = 0;
        $response = Http::withToken('kmbatMHAI4NVYNKvMDyt')->get('http://carrito/api/ShopCard', [
            'idUnico' => auth()->user()->id,
        ]);
        $ShopCard = json_decode($response->body(), true);
        if (!empty($ShopCard)) {
            $cantidad = count($ShopCard);
        }
    @endphp
    <a href="{{ route('ShopCardList') }}" class="text-black d-flex gap-2 "><svg xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M7 22q-.825 0-1.412-.587T5 20t.588-1.412T7 18t1.413.588T9 20t-.587 1.413T7 22m10 0q-.825 0-1.412-.587T15 20t.588-1.412T17 18t1.413.588T19 20t-.587 1.413T17 22M5.2 4h14.75q.575 0 .875.513t.025 1.037l-3.55 6.4q-.275.5-.737.775T15.55 13H8.1L7 15h12v2H7q-1.125 0-1.7-.987t-.05-1.963L6.6 11.6L3 4H1V2h3.25z" />
        </svg><span>{{ $cantidad }}</span></a>
@endif
