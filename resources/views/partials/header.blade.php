<header>
    <nav class="navbar">
        {{-- Logo --}}
        <div class="logo">
            <a href="{{ route('home') }}" class="brand">
                <img src="{{ Vite::asset('public/img/dc-logo.png') }}" alt="logo png">
            </a>
        </div>

        {{-- Navigation Links --}}
        <ul class="nav-links">
            @php
                $navLinksData = [
                    ['route' => 'home', 'text' => 'HOME'],
                    ['route' => 'about', 'text' => 'CHI SIAMO'],
                    ['route' => 'contacts', 'text' => 'CONTATTI'],
                    ['route' => 'products', 'text' => 'PRODOTTI'],
                ];

                // Il link attivo
                $activeLink = Route::currentRouteName();
            @endphp

            @foreach ($navLinksData as $link)
                <li>
                    <a href="{{ route($link['route']) }}" class="{{ $link['route'] === $activeLink ? 'active' : '' }}">
                        {{ $link['text'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
    {{-- Jumbotron --}}
    <div class="jumboHeroes"></div>
</header>
