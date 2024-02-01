<x-main>
    <div id="offer-container">

        @foreach ($offers as $offer)
            <div id="offer-field">
                <span id="offer-title">{{ $offer->name }}</span>
                <span id="offer-price">{{ $offer->price }}</span>
            </div>
        @endforeach
    </div>
</x-main>
