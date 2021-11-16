<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <title>Laravel Repositories and Services</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h4 class="page-header">Creat User </h4>
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
                        {{ session('status') }}
                    </div>
                @endif
                <form class="row g-3" role="form">
                    <div class="col-12">
                        <input type="text" class="form-control user-name" id="validationServer01"
                            aria-describedby="validationServer03Feedback" required name="name" placeholder="Name">
                        <div id="validationServer01Feedback" class="invalid-feedback">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control user-email" id="validationServer02"
                            aria-describedby="validationServer03Feedback" required name="email" placeholder="Email">
                        <div id="validationServer02Feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control user-password" id="validationServer03"
                            aria-describedby="validationServer03Feedback" required name="password" placeholder="Password">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info user-submit">Submit User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
</body>

</html>
