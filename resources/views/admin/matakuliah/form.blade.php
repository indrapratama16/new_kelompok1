<div class="form-group {{ $errors->has('kode_mk') ? 'has-error' : ''}}">
    {!! Form::label('kode_mk', 'Kode Mk', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('kode_mk', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kode_mk', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama_mk') ? 'has-error' : ''}}">
    {!! Form::label('nama_mk', 'Nama Mk', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_mk', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_mk', '<p class="help-block">:message</p>') !!}
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