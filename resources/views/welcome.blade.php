<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Model Controller</title>

        {{-- assets from directive @vite  --}}
        @vite('resources/js/app.js')
    </head>
    <body class="bg-dark text-white">

        <main>
            <ul>
                @foreach ($movies as $movie)
                    <li>
                        {{ $movie->title }}
                    </li>
                @endforeach
            </ul>
        </main>

    </body>
</html>