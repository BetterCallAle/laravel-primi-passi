<header class="bg-dark text-light py-3">
    <div class="container d-flex">
        <div class="logo">
            <h3>FakeNASA</h3>
        </div>
        <nav class="navbar navbar-expand ms-auto">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($pageNames as $pageName)
                    <li class="navbar-item me-3">
                        <a href="{{ route($pageName) }}">
                            @if ($pageName === "home")
                               <span>{{ "Terra" }}</span> 
                            @elseif($pageName === "mars")
                               <span>{{ "Marte" }}</span> 
                            @else
                               <span>{{"Plutone"}}</span> 
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>