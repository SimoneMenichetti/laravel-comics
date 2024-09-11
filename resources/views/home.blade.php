{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <main>
        <div class="buttoncurrent">
            <button class="currentseries-button"><b>CURRENT SERIES</b></button>
        </div>
        <div class="container">
            @foreach ($cards as $card)
                <section>
                    <div class="card">
                        <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                        <h3>{{ $card['series'] }}</h3>
                    </div>
                </section>
            @endforeach
        </div>
        <div class="box buttonload">
            <button class="loadmore-button">LOAD MORE</button>
        </div>
    </main>
@endsection
@section('titlePage')
    Home
@endsection
