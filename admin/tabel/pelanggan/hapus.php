<?php
require '../../koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi , "DELETE FROM pelanggan WHERE PelangganID = $id");

echo "
<script>
location = '../../pelanggan.php'
</script>
";