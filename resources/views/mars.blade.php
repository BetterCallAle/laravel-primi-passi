<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Benvenuto su Marte</title>
</head>
<body>
    <h1>Benvenuto su {{ $planetName }}!</h1>

    <p>Questa è una descrizione di Marte, ma siccome sono pigro, eccoti un bel Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur atque repudiandae, harum, voluptate odit cupiditate vel nesciunt, quod voluptates molestias ratione. Eligendi, dolorem. Sit vero beatae voluptate facilis consequatur laboriosam!</p>
    
    @php
        $total_satellites = count($satellites);
    @endphp

    @if ($total_satellites === 1)
        <h3>{{ $planetName }} ha un solo satellite:</h3>
    @else
        <h3>{{ $planetName }} ha ben {{ $total_satellites }} satelliti:</h3>
    @endif

    <ul>
        @foreach ($satellites as $satellite)
            <li>{{ $satellite }}</li>
        @endforeach
    </ul>

    <p>Ti aspettavi altre informazioni su {{ $planetName }}? Beh, che ti aspettavi? C'è un motivo se questo sito si chiama "FakeNASA"</p>

    <a href="{{ route("home") }}">Vai sulla Terra</a>
    <a href="{{ route("pluto") }}">Vai su Plutone</a>
</body>
</html>