<x-main>
    <video autoplay muted loop id="bg-video">
        <source src="{{ asset('storage/' . $enterpriseBgPath) }}" type="video/mp4">
    </video>

    <div id="content">
        <img id="logo" src="{{ asset('storage/' . $enterpriseLogoPath) }}" alt="LOGO">
        <span>{{ $enterpriseName }}</span>
    </div>
</x-main>
