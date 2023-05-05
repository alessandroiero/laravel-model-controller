<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Movies</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <main class="container">
            <h1>Movies</h1>
            <div class="container">
                <ul class="cards">
                    @foreach ($movies as $movie)
                    <div class="card" >
                        <h1>Titolo: {{$movie->title}}</h1>
                        <h2>Titolo Originale: {{$movie->original_title}}</h2>
                        <h3>Nazionalità: {{$movie->nationality}}</h3>
                        <h3>Data di Uscita: {{$movie->date}}</h3>
                        <h4>Voto: {{$movie->vote}}</h4>
                    </div>
                  @endforeach
                </ul>
            </div>
        </main>

    </body>
</html>
