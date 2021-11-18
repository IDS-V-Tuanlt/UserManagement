@extends ('layouts.master')
@section('head.title')
    Product
@stop
@section('body.content')
    <h2>Product Detail</h2>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-2">
            <div class="thumbnail">
                <img src="https://via.placeholder.com/350x250" alt="100%x200">
            </div>
        </div>
        <div class="col-md-6">
            <form class="form-vertical" role="form" method="post" action="{{ route('order.product', $product->sp_ma) }}">
                {{ csrf_field() }}
                <h3 class="page-header">{{ $product->sp_ten }} </h3>
                <p>{{ $product->sp_thongTin }}</p>
                <h5 class="text-danger">{{ $product->sp_giaBan }} VND</h5>
                <p>
                <div class="buttons_added">
                    <input aria-label="quantity" class="input-qty" max="10" min="1" name="quantity" type="number"
                        value="1">
                </div>
                </p>
                <div class="caption">
                    <button type="submit" class="btn btn-primary" role="button">Order</button>
                </div>
            </form>
        </div>
    </div>
@stop
