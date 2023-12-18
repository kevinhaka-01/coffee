<?php
require '../../koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi , "DELETE FROM kategoriproduk WHERE KategoriProdukID = $id");

echo "
<script>
location = '../../kategoriproduk.php'
</script>
";