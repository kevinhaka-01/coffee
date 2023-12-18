<?php 

require '../../koneksi.php';

if(isset($_POST['tambah'])) {
    $TanggalPesanan = $_POST['TanggalPesanan'];
    $TotalHarga = $_POST['TotalHarga'];
   
    $sql = mysqli_query($koneksi,"INSERT INTO pesanan SET
    TanggalPesanan = '$TanggalPesanan',
    TotalHarga = '$TotalHarga'
    ");

    echo "
    <script>
    document.location.href = '../../pesanan.php';
    </script>
    ";
}