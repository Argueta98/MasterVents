
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Marca') }}</label>
    <div>
        {{ Form::text('brand', $brand->brand, ['class' => 'form-control' .
        ($errors->has('brand') ? ' is-invalid' : ''), 'placeholder' => 'Brand']) }}
        {!! $errors->first('brand', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Marca <b>brand</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('Estado') }}</label>
    <div>
        {{ Form::select('status', ['1' => 'Activo', '0' => 'Inactivo'], $brand->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => '[ SELECCIONE ]']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Marca <b>status</b> instruction.</small>
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
