<?php
require '../../koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi , "DELETE FROM produk WHERE ProdukID = $id");

echo "
<script>
location = '../../produk.php'
</script>
";