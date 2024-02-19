@extends('layouts.app')

@section('template_title')
    {{ $skin->name ?? "{{ __('Show') Skin" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Skin</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('skins.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $skin->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Coleccion Id:</strong>
                            {{ $skin->coleccion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Float:</strong>
                            {{ $skin->float }}
                        </div>
                        <div class="form-group">
                            <strong>Desgaste:</strong>
                            {{ $skin->desgaste }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Recomendado:</strong>
                            {{ $skin->precio_recomendado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
