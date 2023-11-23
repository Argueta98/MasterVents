<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('category') }}</label>
    <div>
        {{ Form::text('category', $category->category, ['class' => 'form-control' . ($errors->has('category') ? ' is-invalid' : ''), 'placeholder' => 'Category']) }}
        {!! $errors->first('category', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Category <b>category</b> instruction.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('status') }}</label>
    <div>
        {{ Form::select('status', ['1' => 'Activo', '0' => 'Inactivo'], $category->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Select Status']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Category <b>status</b> instruction.</small>
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