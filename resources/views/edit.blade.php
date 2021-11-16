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
            <h4 class="page-header">Edit User </h4>
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            <form class="form-vertical" role="form" method="post" action="{{ route('update.user', $user->id) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <input type="text" name="email" readonly class="form-control" placeholder="Email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Update User</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
