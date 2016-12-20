<div class="form-group {{ $errors->has('dosen_id') ? 'has-error' : ''}}">
    {!! Form::label('dosen_id', 'Dosen Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dosen_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dosen_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('mahasiswa_id') ? 'has-error' : ''}}">
    {!! Form::label('mahasiswa_id', 'Mahasiswa Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('mahasiswa_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('mahasiswa_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>