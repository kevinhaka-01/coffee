<?php
require '../../koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi , "DELETE FROM pesanan WHERE PesananID = $id");

echo "
<script>
location = '../../pesanan.php'
</script>
";