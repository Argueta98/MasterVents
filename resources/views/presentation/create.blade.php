<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('Presentacion') }}</label>
    <div>
        {{ Form::text('presentation', old('presentation'), ['class' => 'form-control' . ($errors->has('presentation') ? ' is-invalid' : ''), 'placeholder' => 'Presentation']) }}
        {!! $errors->first('presentation', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Presentation <b>presentation</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('Siglas') }}</label>
    <div>
        {{ Form::text('siglas', old('siglas'), ['class' => 'form-control' . ($errors->has('siglas') ? ' is-invalid' : ''), 'placeholder' => 'Siglas']) }}
        {!! $errors->first('siglas', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Presentation <b>siglas</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('Estado') }}</label>
    <div>
        {{ Form::select('status', ['1' => 'Activo', '0' => 'Inactivo'], old('status'), ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'SELECCIONE']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Presentation <b>status</b> instruction.</small>
    </div>
</div>


<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
        </div>
    </div>
</div>
