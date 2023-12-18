<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $PesananID = $_POST['PesananID'];
    $PelangganID = $_POST['PelangganID'];

    $TanggalPesanan = $_POST['TanggalPesanan'];
    $TotalHarga = $_POST['TotalHarga'];
   
    $sql = mysqli_query($koneksi,"UPDATE pesanan SET
    
    TanggalPesanan = '$TanggalPesanan',
    TotalHarga = '$TotalHarga'

    WHERE 
    PesananID = $id
    ");

    echo "
    <script>
    document.location.href = '../../pesanan.php';
    </script>
    ";

}