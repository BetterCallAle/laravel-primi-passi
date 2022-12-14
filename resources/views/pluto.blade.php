<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plutone</title>
</head>
<body>
    <h1>Benvenuto su Plutone!</h1>
    <p>Ti aspettavi una descrizione del pianeta? E invece beccati questo Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae neque saepe labore ut voluptatem provident. Ut provident mollitia aperiam alias, cupiditate porro? Veniam minus quasi cum iure asperiores, totam quaerat.</p>
    @php
        $total_satellites = count($satellites);
    @endphp

    @if ($total_satellites === 1)
        <h3>{{ $planetName }} ha un solo satellite</h3>
    @else
        <h3>{{ $planetName }} ha ben {{ $total_satellites }} satelliti</h3>
    @endif

    <ul>
        @foreach ($satellites as $satellite)
            <li>{{ $satellite }}</li>
        @endforeach
    </ul>

    <p>Ti aspettavi altre informazioni su {{ $planetName }}? Beh, che ti aspettavi? C'è un motivo se questo sito si chiama "FakeNASA"</p>

    <a href="{{route("home")}}">Vai sulla Terra</a>
    <a href="{{route("mars")}}">Vai su Marte</a>
</body>
</html>