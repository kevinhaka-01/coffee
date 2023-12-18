<?php
require '../../koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi , "DELETE FROM promo WHERE PromoID = $id");

echo "
<script>
location = '../../promo.php'
</script>
";