{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')

<main>
    <h1>I miei prodotti</h1>


    <div class="cards-wrapper container">

        @foreach ($products as $product )

        <div class="card">
                <img src="{{ $product['src'] }}" alt="{{ $product['titolo'] }}">
                <h4>{{ $product['titolo'] }}</h4>
            </div>

        @endforeach

    </div>


  </main>

@endsection


@section('titlePage')
    products
@endsection
