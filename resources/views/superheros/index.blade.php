@extends('layouts.base')

@section('title', 'Page Title')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col col-lg-8">
            <p>
                <h2>Super-hérois</h2>
            </p>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nickname</th>
                        <th scope="col">Real name</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>

                <tbody>
                   @foreach($superheros as $superhero)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $superhero->nickname }}</td>
                            <td>{{ $superhero->real_name }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Detalhes</button>
                                <button type="button" class="btn btn-primary btn-sm">Editar</button>
                                <button type="button" class="btn btn-danger btn-sm">Remover</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
