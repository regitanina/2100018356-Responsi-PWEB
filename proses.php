<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$lokasi = $_POST['lokasi'];
$hasil = $_POST['hasil'];



echo "<head><title>Jasa Pengiriman</title></head>";
$fp = fopen("form.txt", "a+");
fputs($fp, "$nama|$email|$lokasi|$hasil\n");
fclose($fp);
header("Location: index.html");
