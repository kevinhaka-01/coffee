<?php
require '../../koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi , "DELETE FROM rincianpesanan WHERE RincianPesananID = $id");

echo "
<script>
location = '../../rincianpesanan.php'
</script>
";