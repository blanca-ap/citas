@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Localizaciones</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'localizacions.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear localizacion', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre del lugar</th>
                                <th>Longitud</th>
                                <th>Latitud</th>
                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($localizacions as $localizacion)


                                <tr>
                                    <td>{{ $localizacion->nombre }}</td>
                                    <td>{{ $localizacion->longitud }}</td>
                                    <td>{{ $localizacion->latitud }}</td>

                                    <td>
                                        {!! Form::open(['route' => ['localizacions.edit',$localizacion->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['localizacions.destroy',$localizacion->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection