@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Jadwalmatakuliah</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/jadwalmatakuliah/create') }}" class="btn btn-primary btn-xs" title="Add New jadwalmatakuliah"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Hari </th><th> Dosen Id </th><th> Matakuliah Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($jadwalmatakuliah as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->hari }}</td><td>{{ $item->dosen_id }}</td><td>{{ $item->matakuliah_id }}</td>
                                        <td>
                                            <a href="{{ url('/admin/jadwalmatakuliah/' . $item->id) }}" class="btn btn-success btn-xs" title="View jadwalmatakuliah"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/jadwalmatakuliah/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit jadwalmatakuliah"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/jadwalmatakuliah', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete jadwalmatakuliah" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete jadwalmatakuliah',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $jadwalmatakuliah->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection