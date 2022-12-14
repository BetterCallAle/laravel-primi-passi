<main>
    <section class="py-5">
        <div class="container">
            @php
                $total_satellites = count($satellites);
            @endphp

            @if ($total_satellites === 1)
                <h1 class="text-center">Benvenuto sulla {{ $planetName }}!</h1>
            @else
                <h1 class="text-center">Benvenuto su {{ $planetName }}!</h1>
            @endif

            

            <p class="my-2">Questa è una descrizione del pianeta {{ $planetName }}, ma siccome sono pigro, eccoti un bel Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur atque repudiandae, harum, voluptate odit cupiditate vel nesciunt, quod voluptates molestias ratione. Eligendi, dolorem. Sit vero beatae voluptate facilis consequatur laboriosam!</p>
            

            @if ($total_satellites === 1)
                <h3>La {{ $planetName }} ha un solo satellite:</h3>
            @else
                <h3>{{ $planetName }} ha ben {{ $total_satellites }} satelliti:</h3>
            @endif

            <ul>
                @foreach ($satellites as $satellite)
                    <li>{{ $satellite }}</li>
                @endforeach
            </ul>

            <p>Ti aspettavi altre informazioni su {{ $planetName }}? Beh, che ti aspettavi? C'è un motivo se questo sito si chiama "FakeNASA"</p>
        </div>
    </section>
</main>