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
            <div class="container d-flex flex-wrap align-items-center justify-content-center">
                @foreach ($movies as $movie)
                    <div class="card m-3" style="width: 18rem;">
                        <div class="card-header text-dark">
                            {{ $movie->title }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Original Title: {{ $movie->original_title }}
                            </li>
                            <li class="list-group-item">
                                Nationality: {{ $movie->nationality }}
                            </li>
                            <li class="list-group-item">
                                Date: {{ $movie->date }}
                            </li>
                            <li class="list-group-item">
                                Rating: {{ $movie->vote }}
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </main>

    </body>
</html>