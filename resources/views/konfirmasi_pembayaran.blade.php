<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Pembayaran</h1>
        <form id="payment-form">
            <label for="transaction-id">ID Transaksi:</label>
            <input type="text" id="transaction-id" name="transaction-id" required>
            <label for="amount">Jumlah Pembayaran:</label>
            <input type="number" id="amount" name="amount" required>

            <button type="button" onclick="confirmPayment()">Konfirmasi Pembayaran</button>
        </form>

        <div id="confirmation-message"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>
