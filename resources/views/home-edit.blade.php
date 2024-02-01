<x-main>
    <video autoplay muted loop id="bg-video">
        <source src="{{ asset('storage/' . $enterpriseBgPath) }}" type="video/mp4">
    </video>

    <div id="edit-content">
        <form action="/editHomeData" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <img id="logo" src="{{ asset('storage/' . $enterpriseLogoPath) }}" alt="LOGO">
            <input class="file-input" type="file" name="logo" id="logo-file">
            @error('logo')
                <span style="color: red">Błąd przesyłania pliku</span>
            @enderror
            <label for="logo-file">
                <h4 id="logo-edit">Edytuj logo</h4>
            </label>
            <h4 id="name-edit">Edytuj nazwę firmy</h4>
            <input class="text-input" type="text" name="name" value="{{ $enterpriseName }}">
            <input class="file-input" type="file" name="bg-file" id="bg-file" accept=".mp4,.mov">
            <label for="bg-file" id="bg-file-label">
                <h4 id="logo-edit">Edytuj tło</h4>
            </label>
            @error('bg-file')
                <span style="color: red">Błąd przesyłania pliku</span>
            @enderror
            <input class="submit-button" type="submit" value="AKTUALIZUJ">
        </form>
        @if (Session::has('message'))
            <span>{{ Session::get('message') }}</span>
        @endif
    </div>
</x-main>
