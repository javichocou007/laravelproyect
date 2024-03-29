@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Coleccione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header bg-secondary text-white">
                        <span class="card-title">{{ __('Create') }} Colecciones</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('colecciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('coleccione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
