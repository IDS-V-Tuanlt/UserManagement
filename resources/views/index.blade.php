<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <title>Laravel Repositories and Services</title>
    <meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="row form-group justify-content-center">
            <div class="col-8">
                <h4 class="page-header">User List </h4>
                <div class="dropdown d-flex justify-content-end">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-default">
                                    {{ __('Logout') }}
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
                <div class="form-group">
                    <a href="{{ route('create.getform') }}" class="btn btn-success" role="button">Add User</a>
                </div>
                <h5>Search</h5>
                <form class="form-vertical" role="form" method="post" action="{{ route('search.user') }}">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Name" aria-label="Name"
                            aria-describedby="basic-addon1" name="name">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">Email</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Email" aria-label="email"
                            aria-describedby="basic-addon2" name="email">
                    </div>
                    <div class="input-group mb-3 d-flex justify-content-end">
                        {{-- <div class="input-group-text p-0">
                            <select name="choose" class="form-select form-select-lg shadow-none bg-light border-0">
                                <option value="">--- Choose ---</option>
                                <option value="1">Name</option>
                                <option value="2">Email</option>
                            </select>
                        </div> --}}
                        {{-- <input type="text" class="form-control" placeholder="Search Here" name="keyword"> --}}
                        <button type="submit" class="input-group-text shadow-none px-4 btn-warning">
                            Search {{-- <i class="bi bi-search"></i> --}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email </th>
                            {{-- <th>Password </th> --}}
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                        <tbody>
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                {{-- <td>{{ $user->password }}</td> --}}
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
    </div>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
</body>

</html>
