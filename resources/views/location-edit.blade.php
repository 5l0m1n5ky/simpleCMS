<x-main>
    <div id="location-container-edit">
        <iframe
            src="https://www.openstreetmap.org/export/embed.html?bbox=17.99804359674454%2C53.121268067509774%2C18.00252288579941%2C53.12267488404206&amp;layer=mapnik&amp;marker=53.12197148153128%2C18.000283241271973">
        </iframe>
        <form action="/editLocationData" method="POST">
            @method('PUT')
            @csrf
            <div id="address"><i class="bi bi-geo-alt"></i><input name="address" type="text"
                    value="{{ $enterpriseLocation }}"></div>
            @error('address')
                <span style="color: red">Bład adresu</span>
            @enderror
            <div id="email"><i class="bi bi-envelope-at"></i><input name="email" type="text"
                    value="{{ $enterpriseEmail }}"></div>
            @error('email')
                <span style="color: red">Błąd mail'a</span>
            @enderror
            <div id="phone"><i class="bi bi-telephone"></i><input name="phone" type="text"
                    value="{{ $enterprisePhone }}"></div>
            @error('phone')
                <span style="color: red">Błąd numeru</span>
            @enderror
            <input id="location-edit-submit" type="submit" value="AKTUALIZUJ">
        </form>
    </div>

    @php
        $addres = $enterpriseLocation;
    @endphp


    <script>
        var address = @json($addres);

        const apiUrl = `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(address)}`;

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                if (data.length > 0) {
                    const bbox = data[0].boundingbox;
                    console.log("Bounding Box:", bbox);

                    var iframe = document.querySelector('iframe');

                    iframe.src =
                        "https://www.openstreetmap.org/export/embed.html?bbox=" +
                        bbox[2] + "%2C" + bbox[0] + "%2C" +
                        bbox[3] + "%2C" + bbox[1] + "&amp;layer=mapnik";
                } else {
                    console.error("No results found");
                }
            })
            .catch(error => console.error("Error fetching data:", error));
    </script>
</x-main>
