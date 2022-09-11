<?php
// $conn=mysqli_connect('localhost','root','','toko_online');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// $join           = "select * from  detail_transaksi join transaksi on transaksi.id_transaksi = detail_transaksi.id_transaksi";
// $select         = mysqli_query($conn, $join);
?>