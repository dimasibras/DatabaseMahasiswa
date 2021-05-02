<?php
include 'koneksi.php';

$npm=$_POST['npm'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];

$query=mysqli_query($koneksi,"INSERT INTO mahasiswa(npm, nama, alamat) VALUES ('$npm', '$nama','$alamat')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: tambah.php");
}else{
    echo"Gagal Input Data";
}

?>