<?PHP 
// Mengambil Data Input
$nama = $_GET['costumer'];
$produk = $_GET['produk'];
$jumlah = $_GET['jumlah'];

$harga = 0;
    if ($produk === 'TV') {
        $harga = 4200000;
    } else if ($produk === 'Kulkas') {
        $harga = 3100000;
    } else if ($produk === 'Mesin Cuci') {
        $harga = 3800000;
    } else {
        echo 'Produk Tidak Valid';
    }

    $total_harga = $harga * $jumlah;
    

?>