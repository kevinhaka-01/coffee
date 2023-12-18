<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $KategoriProdukID = $_POST['KategoriProdukID'];

    $NamaKategori = $_POST['NamaKategori'];
    $DeskripsiKategori = $_POST['DeskripsiKategori'];

    $sql = mysqli_query($koneksi,"UPDATE kategoriproduk SET
    NamaKategori = '$NamaKategori',
    DeskripsiKategori = '$DeskripsiKategori'

    WHERE 
    KategoriProdukID = $id
    ");

    echo "
    <script>
    document.location.href = '../../kategoriproduk.php';
    </script>
    ";

}