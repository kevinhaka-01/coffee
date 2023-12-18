<?php 

require '../../koneksi.php';

if(isset($_POST['tambah'])) {
    $NamaProduk = $_POST['NamaProduk'];
    $Deskripsi = $_POST['Deskripsi'];
    $Harga = $_POST['Harga'];
    $Stok = $_POST['Stok'];
    $Kategori = $_POST['Kategori'];

    $sql = mysqli_query($koneksi,"INSERT INTO produk SET
    NamaProduk = '$NamaProduk',
    Deskripsi = '$Deskripsi',
    Harga = '$Harga',
    Stok = '$Stok',
    Kategori = '$Kategori'
    ");

    echo "
    <script>
    document.location.href = '../../produk.php';
    </script>
    ";
}