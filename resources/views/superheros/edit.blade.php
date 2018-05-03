@extends('layouts.base')

@section('title', '| Detalhes do super-héroi')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col col-lg-8">
            <p>
                <h2>Edit superhero <u>{{ $superhero->nickname }}</u></h2>
            </p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::model(($superhero), [
                'route' => array('superhero.update', $superhero->id),
                'method' => 'PUT',
            ]) !!}

                <div class="form-group">
                    {!! Form::label('nickname', 'Nickname:', ['class' => 'control-label']) !!}
                    {!! Form::text('nickname', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('real_name', 'Real name:', ['class' => 'control-label']) !!}
                    {!! Form::text('real_name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('origin_description', 'Origin description:', ['class' => 'control-label']) !!}
                    {!! Form::textarea('origin_description', null, ['class' => 'form-control', 'rows' => 3]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('superpowers', 'Superporwers:', ['class' => 'control-label']) !!}
                    {!! Form::textarea('superpowers', null, ['class' => 'form-control', 'rows' => 3]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('catch_phrase', 'Catch phrase:', ['class' => 'control-label']) !!}
                    {!! Form::text('catch_phrase', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Edit superhero', ['class' => 'btn btn-primary']) !!}
                <a class="btn btn-primary" href="{{ URL::to('/') }}" role="button">Back</a>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
