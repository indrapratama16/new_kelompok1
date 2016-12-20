@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">prodi {{ $prodi->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/prodi/' . $prodi->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit prodi"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/prodi', $prodi->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete prodi',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $prodi->id }}</td>
                                    </tr>
                                    <tr><th> Kode Prodi </th><td> {{ $prodi->kode_prodi }} </td></tr><tr><th> Nama Prodi </th><td> {{ $prodi->nama_prodi }} </td></tr><tr><th> User Id </th><td> {{ $prodi->user_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection