<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $jugadore->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('appepat') }}
            {{ Form::text('appepat', $jugadore->appepat, ['class' => 'form-control' . ($errors->has('appepat') ? ' is-invalid' : ''), 'placeholder' => 'Appepat']) }}
            {!! $errors->first('appepat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('appmat') }}
            {{ Form::text('appmat', $jugadore->appmat, ['class' => 'form-control' . ($errors->has('appmat') ? ' is-invalid' : ''), 'placeholder' => 'Appmat']) }}
            {!! $errors->first('appmat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('posicion') }}
            {{ Form::text('posicion', $jugadore->posicion, ['class' => 'form-control' . ($errors->has('posicion') ? ' is-invalid' : ''), 'placeholder' => 'Posicion']) }}
            {!! $errors->first('posicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>