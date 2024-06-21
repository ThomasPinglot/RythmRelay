<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="homepage">

            <div id="title">
                Titre <span class="text-highlight">autre couleur</span>
            </div>

            <div id="text">
                Test <span class="text-highlight">de</span> texte
            </div>

            <div id="buttons">
                <button>Register</button>
                <button>Log In</button>
            </div>

        </div>
    </body>
</html>
