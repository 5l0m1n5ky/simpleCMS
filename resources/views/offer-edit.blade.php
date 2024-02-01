<x-main>
    <div id="offer-container">

        <div id="offer-edit-field">
            <div class="offer-update-container">
                <form action="/createOffer" method="POST">
                    @csrf
                    <input name="offerName" type="text" placeholder="Nazwa usługi">
                    <input name="offerPrice" type="text" placeholder="Cena">
                    <input type="submit" value="DODAJ">
                </form>
            </div>
        </div>

        @foreach ($offers as $offer)
            <div id="offer-edit-field">
                <div class="offer-update-container">
                    <form action="/editOfferData/{{ $offer->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input name="offerName" type="text" value="{{ $offer->name }}">
                        <input name="offerPrice" type="text" value="{{ $offer->price }}">
                        <input type="submit" value="AKTUALIZUJ">
                    </form>
                </div>
                <div class="offer-delete-container">
                    <form action="/deleteOffer/{{ $offer->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <i class="bi bi-trash3-fill"></i>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-main>
