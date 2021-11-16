<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <title>Laravel Repositories and Services</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h4 class="page-header">Search Results </h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email </th>
                        <th>Password </th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                @foreach ($users as $user)
                    <tbody>
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <form action="{{ route('edit.user', $user->id) }}" method="GET">
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                            class="btn btn-success btn-xs"><span
                                                class="fa fa-pencil fa-fw"></span></button></p>
                                </td>
                            </form>
                            <form action="{{ route('destroy.user', $user->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                            class="btn btn-danger btn-xs"><span
                                                class="fa fa-fw fa-trash"></span></button></p>
                                </td>
                            </form>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
