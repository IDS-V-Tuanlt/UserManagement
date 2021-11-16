<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Products List</h2>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="https://via.placeholder.com/350" alt="100%x200">
                        <div class="caption">
                            <h3>{{$product->sp_ten}}</h3>
                            <p>{{$product->sp_giaBan}}</p>
                            <p><a href="{{ route('show.product', $product->sp_ma)}}" class="btn btn-primary" role="button">Choose</a> 
                              {{-- <a href="#" class="btn btn-default" role="button">Button</a> --}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            {!! $products->render() !!}
          </div>
        </div>
    </div>
</body>

</html>
