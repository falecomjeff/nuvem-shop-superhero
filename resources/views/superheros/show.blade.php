@extends('layouts.base')

@section('title', '| Superhero details')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col col-lg-8">
            <p>
                <h2>Details of superhero <u>{{ $superhero->nickname }}</u></h2>
            </p>

            @if(\Session::has('success'))
                <div class="alert alert-success">
                    {{\Session::get('success')}}
                </div>
            @endif

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

            <div>
                <label><strong>Created at:</strong></label>
                @if($superhero->created_at)
                    {{ $superhero->created_at->format('d/m/Y H:i:s') }}
                @endif
            </div>

            <div>
                <label><strong>Updated at:</strong></label>
                @if($superhero->created_at)
                    {{ $superhero->updated_at->format('d/m/Y H:i:s') }}
                @endif
            </div>

            <p>
                <h4>Images of superhero</h4>
            </p>
            <hr>

            @if($superhero->superheroImages)
                <div>
                    @foreach($superhero->superheroImages as $superheroImage)
                        <p>
                            <img src="{{ url('/') }}/images/{{ $superheroImage->name }}" width="300" class="rounded mx-auto d-block">
                        </p>
                    @endforeach
                </div>
            @endif
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
