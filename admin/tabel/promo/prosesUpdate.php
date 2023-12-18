<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $PromoID = $_POST['PromoID'];

    $KodePromo = $_POST['KodePromo'];
    $DeskripsiPromo = $_POST['DeskripsiPromo'];
    $Diskon = $_POST['Diskon'];
    $TanggalMulai = $_POST['TanggalMulai'];
    $TanggalBerakhir = $_POST['TanggalBerakhir'];

    $sql = mysqli_query($koneksi,"UPDATE promo SET
    KodePromo = '$KodePromo',
    DeskripsiPromo = '$DeskripsiPromo',
    Diskon = '$Diskon',
    TanggalMulai = '$TanggalMulai',
    TanggalBerakhir = '$TanggalBerakhir'

    WHERE 
    PromoID = $id
    ");

    echo "
    <script>
    document.location.href = '../../promo.php';
    </script>
    ";

}