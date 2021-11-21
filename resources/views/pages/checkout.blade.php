@extends ('layouts.master')
@section('head.title')
    Checkout
@stop
@section('body.content')
    <h2>Checkout</h2>
    @if (session('status'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="https://via.placeholder.com/350" alt="100%x200">
            </div>
        </div>
        <div class="col-md-8">
            <form class="form-vertical" role="form" method="post" action="{{ route('checkout') }}">
                {{ csrf_field() }}
                <h3 class="page-header">Product information </h3>
                <input type="text" name="sp_ma" hidden value="{{ $product->sp_ma }}">
                <div class="form-group">
                    <label for="sp_ten">Product name:</label>
                    <input type="text" class="remove-input text-danger" name="sp_ten" readonly
                        value="{{ $product->sp_ten }}">
                </div>
                <div class="form-group">
                    <label for="sp_ten">Quantity:</label>
                    <input type="text" class="remove-input text-danger" name="ctdh_soLuong" readonly
                        value="{{ $quantity }}">
                </div>
                <div class="form-group">
                    <label for="sp_ten">Price:</label>
                    <input type="text" class="remove-input text-danger t-a-c" name="ctdh_donGia" readonly
                        value="{{ $price }}">
                    <span>VND</span>
                </div>
                <h3 class="page-header">Customer information </h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="kh_hoTen" placeholder="Name">
                </div>
                <div class="form-group">
                    <select class="form-control" name="kh_gioiTinh">
                        <option value="">--- Choose a gender ---</option>
                        <option value="1">Men</option>
                        <option value="2">Women</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="kh_email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="kh_diaChi" placeholder="Address">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="kh_dienThoai" placeholder="Phone number">
                </div>
                @if (!session('status'))
                    <div class="caption">
                        <button type="submit" class="btn btn-primary" role="button">Checkout</button>
                    </div>
                @endif
        </div>
        </form>
    </div>
    </div>
@stop
