<?php 
//coding dibawah digunakan untuk mengkoneksikan ke database

$koneksi = mysqli_connect("localhost","root","","kasir_ukkbgspr");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>