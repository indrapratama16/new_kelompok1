<div class="form-group {{ $errors->has('kode_prodi') ? 'has-error' : ''}}">
    {!! Form::label('kode_prodi', 'Kode Prodi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('kode_prodi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kode_prodi', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama_prodi') ? 'has-error' : ''}}">
    {!! Form::label('nama_prodi', 'Nama Prodi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('nama_prodi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_prodi', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'User Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>