@extends ('layouts.app')
@section('head.title')
    Search Results
@stop
@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <h4 class="page-header">Search Results </h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email </th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                @if (!empty($users))
                @foreach ($users as $user)
                    <tbody>
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <form action="{{ route('edit.user', $user->id) }}" method="GET">
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                            class="btn btn-success btn-xs"><span class="fa fa-pencil fa-fw"></span></button>
                                    </p>
                                </td>
                            </form>
                            <form action="{{ route('destroy.user', $user->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                            class="btn btn-danger btn-xs"><span class="fa fa-fw fa-trash"></span></button></p>
                                </td>
                            </form>
                        </tr>
                    </tbody>
                @endforeach
                @endif
            </table>
        </div>
    </div>
@stop
