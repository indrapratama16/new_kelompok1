<div class="form-group {{ $errors->has('hari') ? 'has-error' : ''}}">
    {!! Form::label('hari', 'Hari', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('hari', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hari', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('dosen_id') ? 'has-error' : ''}}">
    {!! Form::label('dosen_id', 'Dosen Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dosen_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dosen_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('matakuliah_id') ? 'has-error' : ''}}">
    {!! Form::label('matakuliah_id', 'Matakuliah Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('matakuliah_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('matakuliah_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>