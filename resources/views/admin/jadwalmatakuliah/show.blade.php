@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">jadwalmatakuliah {{ $jadwalmatakuliah->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/jadwalmatakuliah/' . $jadwalmatakuliah->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit jadwalmatakuliah"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/jadwalmatakuliah', $jadwalmatakuliah->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete jadwalmatakuliah',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $jadwalmatakuliah->id }}</td>
                                    </tr>
                                    <tr><th> Hari </th><td> {{ $jadwalmatakuliah->hari }} </td></tr><tr><th> Dosen Id </th><td> {{ $jadwalmatakuliah->dosen_id }} </td></tr><tr><th> Matakuliah Id </th><td> {{ $jadwalmatakuliah->matakuliah_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection