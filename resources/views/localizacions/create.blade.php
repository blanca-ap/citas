@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear localizacion</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'localizacions.store']) !!}
                        <div class="form-group">
                            {!! Form::label('latitud', 'Latitud') !!}
                            {!! Form::text('latitud',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('longitud', 'Longitud') !!}
                            {!! Form::text('longitud',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('nombre', 'Nombre del lugar') !!}
                            {!! Form::text('nombre',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection