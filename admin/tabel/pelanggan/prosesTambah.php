<?php 

require '../../koneksi.php';

if(isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = mysqli_query($koneksi,"INSERT INTO pelanggan SET
    nama = '$nama',
    alamat = '$alamat',
    nohp = '$nohp',
    email = '$email',
    password = '$password'
    ");

    echo "
    <script>
    document.location.href = '../../pelanggan.php';
    </script>
    ";
}