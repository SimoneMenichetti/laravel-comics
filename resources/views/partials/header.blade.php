

<header>
    <div class="logo">

        {{-- questa immagine, essendo dentro public, la raggiungo con percorso assoluto partendo da public e non con Vite::asset() --}}
      <img src="/img/logo-molisana.png" alt="Logo Molisana">
    </div>
    <nav class="main-menu">
      <ul>
        {{-- controllo che il nome della rotta corrente sia == al link. se sì stampo la classe active --}}
        {{-- per leggere in nome della rotta corrente use Route::currentRouteName()  --}}
        @foreach ($main_menu as $item )
            <li><a class="{{ Route::currentRouteName() === $item['name'] ? 'active' : '' }}" href="{{ route($item['name']) }}">{{ $item['text'] }}</a></li>

        @endforeach
      </ul>
    </nav>
  </header>
