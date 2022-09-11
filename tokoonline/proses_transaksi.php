<?php
session_start();
    if($_POST){
        include "koneksi.php";
        
        $qry_get_prd=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
        $dt_prd=mysqli_fetch_array($qry_get_prd);
        $_SESSION['cart'][]=array(
            'id_produk'=>$dt_prd['id_produk'],
            'nama'=>$dt_prd['nama'].
            'qty'=>$_POST['jml']
        );
    }
    header('location: proses_tambah_transaksi.php');
    ?>