<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $ProdukID = $_POST['ProdukID'];


    $NamaProduk = $_POST['NamaProduk'];
    $Deskripsi = $_POST['Deskripsi'];
    $Harga = $_POST['Harga'];
    $Stok = $_POST['Stok'];
    $Kategori = $_POST['Kategori'];

    $sql = mysqli_query($koneksi,"UPDATE produk SET
    NamaProduk = '$NamaProduk',
    Deskripsi = '$Deskripsi',
    Harga = '$Harga',
    Stok = '$Stok',
    Kategori = '$Kategori'

    WHERE 
    ProdukID = $id
    ");

    echo "
    <script>
    document.location.href = '../../produk.php';
    </script>
    ";

}