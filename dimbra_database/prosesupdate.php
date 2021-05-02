<?php
include 'koneksi.php';
$npmlama=$_GET['npm'];
$npm=$_POST['npm'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];

$query=mysqli_query($koneksi, "UPDATE mahasiswa SET npm='$npm', nama='$nama', alamat='$alamat' WHERE npm='$npmlama' ")
or die(mysqli_error($koneksi));

if($query){
	header("Location: index.php");
}else{
	echo "Gagal update data";
}
?>