<?php 
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$phone = $_POST['phone'];
$layanan = $_POST['layanan'];
$tgl = date("d-M-Y");
$hari = date("l");
$waktu = date("h:i:s A");

$fp = fopen("booking.txt", "a+");
fputs($fp,"|$waktu|$hari|$tgl|$nama|$alamat|$email|$phone|$layanan|\n");
fclose($fp);

header("Location: lihat.php");

?>



