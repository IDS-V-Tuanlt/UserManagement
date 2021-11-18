@extends ('layouts.master')
@section('head.title')
    Create User
@stop
@section('body.content')
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
@stop
