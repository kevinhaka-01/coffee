<?php 

require '../../koneksi.php';

if(isset($_POST['tambah'])) {
    $NamaKategori = $_POST['NamaKategori'];
    $DeskripsiKategori = $_POST['DeskripsiKategori'];

    $sql = mysqli_query($koneksi,"INSERT INTO kategoriproduk SET
    NamaKategori = '$NamaKategori',
    DeskripsiKategori = '$DeskripsiKategori'
    ");

    echo "
    <script>
    document.location.href = '../../kategoriproduk.php';
    </script>
    ";
}