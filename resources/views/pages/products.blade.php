@extends ('layouts.master')
@section('head.title')
    Products List
@stop
@section('body.content')
    <h2>Products List</h2>
    <div class="row justify-content-center">
        @foreach ($products as $product)
            <div class="col-3 p-2">
                <div class="img-fluid img-thumbnail">
                    <img src="https://via.placeholder.com/260x220" alt="">
                    <div class="caption">
                        <h3>{{ $product->sp_ten }}</h3>
                        <p>{{ $product->sp_giaBan }}</p>
                        <p><a href="{{ route('show.product', $product->sp_ma) }}" class="btn btn-primary"
                                role="button">Choose</a>
                            {{-- <a href="#" class="btn btn-default" role="button">Button</a> --}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row mt-2 justify-content-center">
        <div class="col-6">
            {!! $products->render() !!}
        </div>
    </div>
@stop
