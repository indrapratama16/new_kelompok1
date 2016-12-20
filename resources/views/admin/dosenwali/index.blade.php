@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dosenwali</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/dosenwali/create') }}" class="btn btn-primary btn-xs" title="Add New dosenwali"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Dosen Id </th><th> Mahasiswa Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dosenwali as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->dosen_id }}</td><td>{{ $item->mahasiswa_id }}</td>
                                        <td>
                                            <a href="{{ url('/admin/dosenwali/' . $item->id) }}" class="btn btn-success btn-xs" title="View dosenwali"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/dosenwali/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit dosenwali"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/dosenwali', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete dosenwali" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete dosenwali',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $dosenwali->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection