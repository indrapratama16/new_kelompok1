@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Datamahasiswa</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/datamahasiswa/create') }}" class="btn btn-primary btn-xs" title="Add New datamahasiswa"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nim </th><th> Nama </th><th> Semester </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($datamahasiswa as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nim }}</td><td>{{ $item->nama }}</td><td>{{ $item->semester }}</td>
                                        <td>
                                            <a href="{{ url('/admin/datamahasiswa/' . $item->id) }}" class="btn btn-success btn-xs" title="View datamahasiswa"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/datamahasiswa/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit datamahasiswa"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/datamahasiswa', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete datamahasiswa" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete datamahasiswa',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $datamahasiswa->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection