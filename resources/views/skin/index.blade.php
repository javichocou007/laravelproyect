@extends('layouts.app')

@section('template_title')
Skin
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Skin') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('skins.create') }}" class="btn btn-warning btn-sm float-right"
                                data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Nombre</th>
                                    <th>Coleccion Id</th>
                                    <th>Float</th>
                                    <th>Desgaste</th>
                                    <th>Precio Recomendado</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($skins as $skin)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $skin->nombre }}</td>
                                    <td>{{ $skin->coleccion_id }}</td>
                                    <td>{{ $skin->float }}</td>
                                    <td>{{ $skin->desgaste }}</td>
                                    <td>{{ $skin->precio_recomendado }}</td>

                                    <td>
                                        <form action="{{ route('skins.destroy',$skin->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('skins.show',$skin->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('skins.edit',$skin->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $skins->links() !!}
        </div>
    </div>
</div>
@endsection