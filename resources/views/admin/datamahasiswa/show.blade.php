@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">datamahasiswa {{ $datamahasiswa->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/datamahasiswa/' . $datamahasiswa->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit datamahasiswa"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/datamahasiswa', $datamahasiswa->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete datamahasiswa',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $datamahasiswa->id }}</td>
                                    </tr>
                                    <tr><th> Nim </th><td> {{ $datamahasiswa->nim }} </td></tr><tr><th> Nama </th><td> {{ $datamahasiswa->nama }} </td></tr><tr><th> Semester </th><td> {{ $datamahasiswa->semester }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection