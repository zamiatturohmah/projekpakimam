<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .checkout-form {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #e4cca1;
            border-radius: 8px;
            background-color: #eee6d7;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="checkout-form">
            <h2 class="text-center">Checkout</h2>
            <form>
                <!-- Customer Information -->
                <div class="form-group">
                    <label for="fullName">Nama Lengkap</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Masukan nama lengkap">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukan email">
                </div>
                <div class="form-group">
                    <label for="phoneNumber">No Handphone</label>
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Masukan no hp">
                </div>

                <!-- Shipping Address -->
                <h4>Alamat Anda</h4>
                <div class="form-group">
                    <label for="address">Provinsi, Kota, Kecamatan</label>
                    <input type="text" class="form-control" id="address" placeholder="Masukan provinsi, kota, kecamatan">
                </div>
                <div class="form-group">
                    <label for="city">Nama Jalan, Gedung</label>
                    <input type="text" class="form-control" id="city" placeholder="Masukan nama jalan, gedung ">
                </div>
                <div class="form-group">
                    <label for="state">Detail lainnya</label>
                    <input type="text" class="form-control" id="state" placeholder="Masukan detail lainnya">
                </div>
                <div class="form-group">
                    <label for="zipCode">Kode Post</label>
                    <input type="text" class="form-control" id="zipCode" placeholder="Masukan kode post">
                </div>

                <!-- Payment Method -->
                <h4>Methode Pembayaran</h4>
                <div class="form-group">
                    <label for="cardNumber">Pilih Metode Pembayaran</label>
                    <select class="form-select" id="country" required>
                        <option value="">COD</option>
                        <option value="">Transfer</option>
                    </select>
                </label>
                </div>
                <div class="form-group">
                    <label for="expiryDate"></label>
                    <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv" placeholder="Enter your CVV">
                </div>
                <!-- Submit Button -->
                <div class="form-group text-center">
                <a href="/finalcheckout" class="btn btn-warning">Checkout</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</form>
</html>
