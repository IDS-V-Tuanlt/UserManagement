<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <title> @yield('head.title') </title>
    <meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{asset('\css\app.css')}}" rel="stylesheet">
    @yield('head.css')
</head>

<body>
    <div class="container">
        @yield('body.content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <script src="{{asset('\js\main.js')}}"></script>
    @yield('body.js')
</body>

</html>
