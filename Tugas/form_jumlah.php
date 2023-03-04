<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Total Harga</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <table class="table text-uppercase table-bordered">
            <tr class="table-primary">
                <th>Nama Costumer</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
            <?php require_once "proses_jumlah.php"; ?>
            <tr class="table-secondary">
                <td><?= $nama; ?></td>
                <td><?= $produk; ?></td>
                <td><?= $jumlah; ?></td>
                <td>Rp. <?= (int) $total_harga; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>