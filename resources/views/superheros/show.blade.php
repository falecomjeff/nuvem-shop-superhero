@extends('layouts.base')

@section('title', '| Detalhes do super-héroi')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col col-lg-8">
            <p>
                <h2>Details of superhero <u>{{ $superhero->nickname }}</u></h2>
            </p><br>

            <div>
                <label><strong>Nickname:</strong></label>
                {{ $superhero->nickname }}
            </div>

            <div>
                <label><strong>Real name:</strong></label>
                {{ $superhero->real_name }}
            </div>

            <div>
                <label><strong>Origin description:</strong></label>
                {{ $superhero->origin_description }}
            </div>

            <div>
                <label><strong>superpowers:</strong></label>
                {{ $superhero->superpowers }}
            </div>

            <div>
                <label><strong>Catch phrase:</strong></label>
                {{ $superhero->catch_phrase }}
            </div>
        </div>
    </div>


    <div class="row justify-content-md-center">
        <div class="col col-lg-8">
            <hr>
            <a class="btn btn-primary" href="{{ URL::to('edit/' . $superhero->id) }}" role="button">Edit</a>
            <a class="btn btn-primary" href="{{ URL::to('/') }}" role="button">Back</a>
        </div>
    </div>
@endsection
