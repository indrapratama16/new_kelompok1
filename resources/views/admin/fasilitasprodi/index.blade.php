@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Fasilitasprodi</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/fasilitasprodi/create') }}" class="btn btn-primary btn-xs" title="Add New fasilitasprodi"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nama </th><th> Jumlah </th><th> User Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($fasilitasprodi as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama }}</td><td>{{ $item->jumlah }}</td><td>{{ $item->user_id }}</td>
                                        <td>
                                            <a href="{{ url('/admin/fasilitasprodi/' . $item->id) }}" class="btn btn-success btn-xs" title="View fasilitasprodi"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/fasilitasprodi/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit fasilitasprodi"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/fasilitasprodi', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete fasilitasprodi" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete fasilitasprodi',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $fasilitasprodi->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection