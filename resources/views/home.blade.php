<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eloquent movies</title>
    <!-- Aggiungi Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    @vite(['resources/sass/app.scss', "resources/js/app.js"])

</head>
<body>
    <header>
        <h1 class="text-center bg-primary mb-4 p-3">DB MOVIES</h1>
    </header>
    <main>
        <div class="container">
            <div class="row g-3 ">
                @foreach ($movies as $movie)
                <div class="col-4">
                    <x-card>
                        <x-slot name="title">{{$movie['title']}}</x-slot>
                        <x-slot name="original_title">{{$movie['original_title']}}</x-slot>
                        <x-slot name="nationality">{{$movie['nationality']}}</x-slot>
                        <x-slot name="date">{{$movie['date']}}</x-slot>
                        <x-slot name="vote">{{$movie['vote']}}</x-slot>

                    </x-card>
                </div>
                    
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>