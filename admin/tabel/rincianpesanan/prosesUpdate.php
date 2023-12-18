<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $RincianPesananID = $_POST['RincianPesananID'];
    $PesananID = $_POST['PesananID'];
    $ProdukID = $_POST['ProdukID'];

    $Jumlah = $_POST['Jumlah'];
    $Subtotal = $_POST['Subtotal'];

    $sql = mysqli_query($koneksi,"UPDATE rincianpesanan SET

    Jumlah = '$Jumlah',
    Subtotal = '$Subtotal'

    WHERE 
    RincianpesananID = $id
    ");

    echo "
    <script>
    document.location.href = '../../rincianpesanan.php';
    </script>
    ";

}