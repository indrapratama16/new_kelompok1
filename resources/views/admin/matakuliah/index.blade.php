@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Matakuliah</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/matakuliah/create') }}" class="btn btn-primary btn-xs" title="Add New matakuliah"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Kode Mk </th><th> Nama Mk </th><th> User Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($matakuliah as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->kode_mk }}</td><td>{{ $item->nama_mk }}</td><td>{{ $item->user_id }}</td>
                                        <td>
                                            <a href="{{ url('/admin/matakuliah/' . $item->id) }}" class="btn btn-success btn-xs" title="View matakuliah"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/matakuliah/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit matakuliah"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/matakuliah', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete matakuliah" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete matakuliah',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $matakuliah->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection