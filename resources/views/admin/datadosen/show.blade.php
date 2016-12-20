@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">datadosen {{ $datadosen->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/datadosen/' . $datadosen->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit datadosen"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/datadosen', $datadosen->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete datadosen',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $datadosen->id }}</td>
                                    </tr>
                                    <tr><th> Nip </th><td> {{ $datadosen->nip }} </td></tr><tr><th> Nama </th><td> {{ $datadosen->nama }} </td></tr><tr><th> Status </th><td> {{ $datadosen->status }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection