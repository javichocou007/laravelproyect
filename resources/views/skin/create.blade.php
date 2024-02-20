@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Skin
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header bg-secondary text-white">
                        <span class="card-title">{{ __('Create') }} Skin</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('skins.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('skin.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
