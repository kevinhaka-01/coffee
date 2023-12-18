<?php 

require '../../koneksi.php';

if(isset($_POST['tambah'])) {
 
    $Jumlah = $_POST['Jumlah'];
    $Subtotal = $_POST['Subtotal'];

    $sql = mysqli_query($koneksi,"INSERT INTO rincianpesanan SET
   
    Jumlah = '$Jumlah',
    Subtotal = '$Subtotal'
    ");

    echo "
    <script>
    document.location.href = '../../rincianpesanan.php';
    </script>
    ";
}