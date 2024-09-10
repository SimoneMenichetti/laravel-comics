<header>
    <nav class="navbar">
        {{-- Logo --}}
        <div class="logo">
            <a href="{{ url('/') }}" class="brand">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo png">
            </a>
        </div>

        {{-- Navigation Links --}}
        <ul class="nav-links">
            @php
                $navLinksData = [
                    ['href' => '#', 'text' => 'CHARACTERS'],
                    ['href' => '#', 'text' => 'COMICS'],
                    ['href' => '#', 'text' => 'MOVIES'],
                    ['href' => '#', 'text' => 'TV'],
                    ['href' => '#', 'text' => 'GAMES'],
                    ['href' => '#', 'text' => 'COLLECTIBLES'],
                    ['href' => '#', 'text' => 'VIDEOS'],
                    ['href' => '#', 'text' => 'FANS'],
                    ['href' => '#', 'text' => 'NEWS'],
                    ['href' => '#', 'text' => 'SHOP'],
                ];

                // Il link attivo
                $activeLink = 'COMICS';
            @endphp

            @foreach ($navLinksData as $link)
                <li>
                    <a href="{{ $link['href'] }}" class="{{ $link['text'] === $activeLink ? 'active' : '' }}">
                        {{ $link['text'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
    {{-- Jumbotron --}}
    <div class="jumboHeroes"></div>
</header>
