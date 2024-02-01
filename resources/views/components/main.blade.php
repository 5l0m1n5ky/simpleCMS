<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="main-box">
        <input type="checkbox" id="check">
        <div class="btn-one">
            <label for="check"><i class="bi bi-list"></i></label>
        </div>
        <div class="sidebar-menu">
            <div class="logo">
                <a href="">myCMS</a>
            </div>
            <div class="btn-two">
                <label for="check">
                    <i class="bi bi-x-square"></i>
                </label>
            </div>
            <div class="menu">
                <ul>

                    @auth
                        <li><a href="/edit"><i class="bi bi-bookmark"></i> Strona główna</a></li>
                        <li><a href="/info/edit"><i class="bi bi-info-square"></i> O firmie</a></li>
                        <li><a href="/location/edit"><i class="bi bi-geo-alt"></i> Jak do nas dotrzeć</a></li>
                        <li><a href="/offer/edit"><i class="bi bi-list-ul"></i> Oferta</a></li>
                        <li><a href="/gallery/edit"><i class="bi bi-file-image"></i> Portfolio</a></li>
                        <li><a href="/chatbotQuestions"><i class="bi bi-question-circle-fill"></i></i> Pytania do ChatBota</a></li>
                    @else
                        <li><a href="/"><i class="bi bi-bookmark"></i> Strona główna</a></li>
                        <li><a href="/info"><i class="bi bi-info-square"></i> O firmie</a></li>
                        <li><a href="/location"><i class="bi bi-geo-alt"></i> Jak do nas dotrzeć</a></li>
                        <li><a href="/offer"><i class="bi bi-list-ul"></i> Oferta</a></li>
                        <li><a href="/gallery"><i class="bi bi-file-image"></i> Portfolio</a></li>
                    @endauth
                </ul>
            </div>
            <div id="button-container">
                @auth
                    <a href="/logout">LOG OUT</a>
                @else
                    <a href="/login">LOG IN</a>
                @endauth
            </div>
        </div>

        <div id="container">{{ $slot }}</div>

        @auth
        @else
            <script>
                var botmanWidget = {
                    aboutText: '',
                    introMessage: "Cześć! Jestem Twoim wirtualnym konsultantem. Zapytaj mnie o coś związanego z firmą!",
                    timeFormat: 'HH:MM',
                    title: 'Wirtualny konsultant',
                    placeholderText: "Napisz wiadomość do ChatBota...",
                    displayMessageTime: 'true',
                    mainColor: '#606060',
                    bubbleBackground: '#353535'
                };
            </script>

            <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
        @endauth



    </div>


</body>


</html>
