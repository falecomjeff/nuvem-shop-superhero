@extends('layouts.base')

@section('title', 'Page Title')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col col-lg-8">
            <p>
                <h2>Superheros</h2>
            </p>

            @if(\Session::has('success'))
                <div class="alert alert-success">
                    {{\Session::get('success')}}
                </div>
            @endif

            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nickname</th>
                        <th scope="col">Real name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>
                   @foreach($superheros as $superhero)
                        <tr>
                            <th scope="row">{{ $superhero->id }}</th>
                            <td>{{ $superhero->nickname }}</td>
                            <td>{{ $superhero->real_name }}</td>
                            <td>
                                {!! Form::open(array('url' => $superhero->id, 'class' => 'pull-right')) !!}
                                <a href="{{ URL::to('show/' . $superhero->id) }}" class="btn btn-primary btn-sm">Details</a>
                                <a href="{{ URL::to('edit/' . $superhero->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Remove', array('class' => 'btn btn-warning btn-sm')) }}
                                {{ Form::close() }}
                                <!-- <a href="#" class="btn btn-danger btn-sm">Remove</a> -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
