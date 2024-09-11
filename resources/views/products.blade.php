{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
    <main>
        <h1 class="title">I miei prodotti</h1>
        <p class="text-white">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat quam in incidunt earum nobis sapiente sint
            voluptate ipsum provident. Aperiam dolorum adipisci aliquid, iusto soluta repellendus distinctio possimus ipsa
            ex!
        </p>

    </main>
@endsection


@section('titlePage')
    products
@endsection
