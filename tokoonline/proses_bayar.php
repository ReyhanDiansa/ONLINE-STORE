<?php

if($_POST){
$jumlah=$_POST['jumlah'];
include "koneksi.php";
$dt_produk=mysqli_query($conn,"select * from produk");
$harga=$dt_produk['harga'];
$total=$jumlah*$harga;
}

?>