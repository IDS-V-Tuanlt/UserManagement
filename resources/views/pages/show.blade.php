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
        <h2>Product Detail</h2>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-2">
                <div class="thumbnail">
                    <img src="https://via.placeholder.com/350" alt="100%x200">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="page-header">{{ $product->sp_ten }} </h3>
                <p>{{ $product->sp_thongTin }}</p>
                <h5 class="text-danger">{{ $product->sp_giaBan }} VND</h5>
                <p>
                    <div class="buttons_added">
                        <input aria-label="quantity" class="input-qty" max="10" min="1" name="quantity"
                            type="number" value="1">
                    </div>
                </p>
                <div class="caption">
                    <p><a href="#" class="btn btn-primary" role="button">Order</a> 
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
