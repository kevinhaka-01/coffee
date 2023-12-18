<?php 

require '../../koneksi.php';

if(isset($_POST['tambah'])) {
    $KodePromo = $_POST['KodePromo'];
    $DeskripsiPromo = $_POST['DeskripsiPromo'];
    $Diskon = $_POST['Diskon'];
    $TanggalMulai = $_POST['TanggalMulai'];
    $TanggalBerakhir = $_POST['TanggalBerakhir'];

    $sql = mysqli_query($koneksi,"INSERT INTO promo SET
    KodePromo = '$KodePromo',
    DeskripsiPromo = '$DeskripsiPromo',
    Diskon = '$Diskon',
    TanggalMulai = '$TanggalMulai',
    TanggalBerakhir = '$TanggalBerakhir'
    ");

    echo "
    <script>
    document.location.href = '../../promo.php';
    </script>
    ";
}