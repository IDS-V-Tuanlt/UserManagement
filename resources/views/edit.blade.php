@extends ('layouts.master')
@section('head.title')
    Edit User
@stop
@section('body.content')
    <div class="row justify-content-center">
        <div class="col-8">
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
                    <input type="text" name="email" readonly class="form-control" placeholder="Email"
                        value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Update User</button>
                </div>
            </form>
        </div>
    </div>
@stop
