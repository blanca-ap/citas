@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar localizacion</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($localizacion, [ 'route' => ['localizacions.update',$localizacion->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('latitud', 'Latitud') !!}
                            {!! Form::text('latitud',$localizacion->latitud,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('longitud', 'Longitud') !!}
                            {!! Form::text('longitud',$localizacion->longitud,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('nombre', 'Nombre del lugar') !!}
                            {!! Form::text('nombre',$localizacion->nombre,['class'=>'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
