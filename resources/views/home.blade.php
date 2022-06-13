@extends('layouts.app')

@section('content')

<section class="container-fluid d-flex mt-5 mb-5">
    <div>
        <img src="http://www.homerswebpage.com/images/jebusDance.gif" alt="">
    </div>
    <div class="row justify-content-center">
        @foreach ($movies as $movie)
        <div class="col-3 mb-4">
            <div class="card bg-black text-white">
                <div class="card-body" style="height:200px">
                    <h5 class="Card-title">Titolo: {{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2">Titolo originale: {{ $movie->original_title }}</h6>
                    <div class="card-text fw-bold">Nazionalità: <span class="fw-light">{{ $movie->nationality }}</span></div>
                    <div class="card-text fw-bold">Data di uscita: <span class="fw-light">{{ $movie->date }}</span> </div>
                    <div class="card-text fw-bold">Voto medio degli utenti: <span class="fw-light">{{ $movie->vote }}</span></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div>
        <img src="http://www.homerswebpage.com/images/jebusDance.gif" alt="">
    </div>

</section>


@endsection