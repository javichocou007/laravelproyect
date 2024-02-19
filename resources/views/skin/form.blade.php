<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $skin->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('coleccion') }}
            {{ Form::select('coleccion_id', $colecciones, $skin->coleccion_id, ['class' => 'form-control' . ($errors->has('coleccion_id') ? ' is-invalid' : ''), 'placeholder' => 'Coleccion']) }}
            {!! $errors->first('coleccion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('float') }}

            {{-- {{ Form::text('float', $skin->float, ['class' => 'form-control' . ($errors->has('float') ? ' is-invalid' : ''), 'placeholder' => 'Float']) }} --}}
            {{ Form::number('float', $skin->float, [
                'class' => 'form-control' . ($errors->has('float') ? ' is-invalid' : ''),
                'placeholder' => 'Float',
                'min' => 0,
                'max' => 1,
                'step' => 0.0000000001,
            ]) }}
            {!! $errors->first('float', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('desgaste') }}
            {{ Form::select('desgaste', ['Recién fabricado', 'Casi nuevo', 'Algo desgastado', 'Bastante desgastado', 'Deplorable'], $skin->desgaste, ['class' => 'form-control' . ($errors->has('desgaste') ? ' is-invalid' : ''), 'placeholder' => 'Desgaste']) }}
            {!! $errors->first('desgaste', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_recomendado') }}
            {{-- {{ Form::text('precio_recomendado', $skin->precio_recomendado, ['class' => 'form-control' . ($errors->has('precio_recomendado') ? ' is-invalid' : ''), 'placeholder' => 'Precio Recomendado']) }} --}}

            {{ Form::number('precio_recomendado', $skin->precio_recomendado, [
                'class' => 'form-control' . ($errors->has('precio_recomendado') ? ' is-invalid' : ''),
                'placeholder' => 'Precio recomendado',
                'min' => 0,
                'step' => 0.01,
            ]) }}
            {!! $errors->first('float', '<div class="invalid-feedback">:message</div>') !!}
            {!! $errors->first('precio_recomendado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
