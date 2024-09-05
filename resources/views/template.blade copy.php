<!DOCTYPE html>
<html lang="id">
    <body style="background-color: rgb(240, 234, 227)">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#">Zami Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/keranjang">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('storage/image/gerai.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang Di Official Gerai Saffa</h5>
                    <p>Salam, Sobat Belanja! Mari Temukan Produk Impianmu di Sini!?.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="storage/image/saffa.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang Di Official Gerai Saffa</h5>
                    <p>Salam, Sobat Belanja! Mari Temukan Produk Impianmu di Sini!?.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="storage/image/geraii saffa.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Selamat Datang Di Official Gerai Saffa</h5>
                    <p>Salam, Sobat Belanja! Mari Temukan Produk Impianmu di Sini!?.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container my-5">
        <h2 class="text-center"> PRODUK KITA</h2>
        <div class="row">
            @foreach ($produk as $item)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('storage/image/'.$item->foto)}}"alt="Product 1" style="width:100%" alt="Image">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">{{$item->name}}</h4>
                            <img src="storage/image/bintang.png" style="width: 40%" style="margin-left: -20%;" alt= "" srcset="">
                        </div>
                        <p class="card-text">{{$item->deskripsi}}</p>
                        <p style="color: brown">{{$item->harga}}</p>
                        <a href="/detailproduk/{{$item->id}}" class="btn btn-success"style="margin-left: 80px; width:50%;">Beli</a>
                    </div>
                  </div>
            </div>
                @endforeach
            {{-- <div class="col-md-4">
                <div class="card mb-4">
                    <img src="storage/image/mukena.png" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <h5 class="card-title">MUKENA</h5>
                        <img src="storage/image/bintang.png" style="width: 40%" style="margin-left: -20%;" alt= "" srcset="">
                        </div>
                        <p class="card-text">Mukena Mahira berbahan Katun Rayon HQ yang adem, ringan, dingin, jatuh, lembut, nyaman berlama-lama dipake sholat..</p>
                        <p style="color: brown">Rp.300.000</p>
                        <a href="/detailproduk" class="btn btn-success"style="margin-left: 80px; width:50%;">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="storage/image/sejadah.png" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <h5 class="card-title">SEJADAH</h5>
                        <img src="storage/image/bintang.png" style="width: 40%" style="margin-left: -20%;" alt= "" srcset="">
                        </div>
                        <p class="card-text">Sajadah Turky Dewasa Bahan Tebal dan Lembut Produk Original Super Spigel Sejadah Murah Terlaris By sajadahku.</p>
                        <P style="color: brown">Rp.150.000</P>
                        <a href="/detailproduk" class="btn btn-success"style="margin-left: 80px; width:50%;">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{asset('storage/image/abaya.png')}}" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <h5 class="card-title">ABAYA</h5>
                        <img src="storage/image/bintang.png" style="width: 40%" style="margin-left: -20%;" alt= "" srcset="">
                        </div>
                        <p class="card-text">bahannya halus, adem, ringan tapi tidak menerawang dan tekstur kainnya unik.</p>
                        <P style="color: brown">Rp.900.000</P>
                        <a href="/detailproduk" class="btn btn-success"style="margin-left: 80px; width:50%;">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="storage/image/sarung.png" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <h5 class="card-title">SARUNG</h5>
                        <img src="storage/image/bintang.png" style="width: 40%" style="margin-left: -20%;" alt= "" srcset="">
                        </div>
                        <p class="card-text">sarung batik printing bahan berkualitas dan tentunya bagus dan elegan saat dipakai.</p>
                        <p style="color: brown">Rp.600.000</p>
                        <a href="/detailproduk" class="btn btn-success" style="margin-left: 80px; width:50%;">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="storage/image/kerudung.png" class="card-img-top" alt="Product 2">
                    <div class="card-body"sty>
                        <div class="d-flex justify-content-between">
                        <h5 class="card-title">KERUDUNG SYAR'I</h5>
                        <img src="storage/image/bintang.png" style="width: 40%" style="margin-left: -20%;" alt= "" srcset="">
                        </div>
                        <p class="card-text">Kerudung syar’i ini terbuat dari bahan katun yang adem dan nyaman dipakai.</p>
                        <p style="color: brown">Rp.100.000</p>
                        <a href="/detailproduk" class="btn btn-success" style="margin-left: 80px; width:50%;" >Beli</a>
                    </div>
                </div> --}}
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('storage/image/stok.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
               </div>
        </div>
    </div>
    <footer class="bg-light py-4">
        <div class="container text-center">
            <p>&copy; 2024 Religious Store. All rights reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
