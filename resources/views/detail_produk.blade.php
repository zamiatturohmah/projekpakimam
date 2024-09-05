<!DOCTYPE html>
<html lang="en">
<head>
    <body style="background-color: rgb(235, 228, 221)">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-details {
            margin-top: 20px;
        }
        .product-image img {
            max-width: 100%;
            height: auto;
        }

    </style>
</head>
<body>
    <form action="/detailproduk">
    <div class="container product-details">
        <div class="row">
            <div class="col-md-6 product-image">
                <img src="{{ asset('/storage/image/'.$product->foto) }}" style="border-radius: 10%" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h4 style="margin-left: 50%;">{{ $product->name }}</h4>
                <p>{{$product->deskripsi}}</p>
                <h4>Rp. {{$product->harga}} </h>


                <div class="form-group">
                    <label for="quantity">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" value="1" min="1">
                </div>

                <div class="text-center">
                    <a href="/checkout" class="btn btn-warning">CheckOut</a>
                    <a href="/keranjang" class="btn btn-secondary">Masukan Keranjang</a>
                </div>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </form>
</body>
</html>
