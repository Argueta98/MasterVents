
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('presentation') }}</label>
    <div>
        {{ Form::text('presentation', $presentation->presentation, ['class' => 'form-control' .
        ($errors->has('presentation') ? ' is-invalid' : ''), 'placeholder' => 'Presentation']) }}
        {!! $errors->first('presentation', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">presentation <b>presentation</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('siglas') }}</label>
    <div>
        {{ Form::text('siglas', $presentation->siglas, ['class' => 'form-control' .
        ($errors->has('siglas') ? ' is-invalid' : ''), 'placeholder' => 'Siglas']) }}
        {!! $errors->first('siglas', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">presentation <b>siglas</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('status') }}</label>
    <div>
        {{ Form::text('status', $presentation->status, ['class' => 'form-control' .
        ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">presentation <b>status</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
