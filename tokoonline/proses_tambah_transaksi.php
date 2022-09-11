<?php
if($_POST){
    $nama=$_POST['nama'];
    $nama_produk=$_POST['id'];
    $petugas=$_POST['ptg'];
    $tanggal= date("Y-m-d");
    $jumlah=$_POST['jml'];
    $id_produk=$_POST['id_produk'];

    include "koneksi.php";
    $p=mysqli_query($conn,"select * from detail_transaksi join transaksi on detail_transaksi.id_transaksi=transaksi.id_transaksi");
    $d=mysqli_fetch_array($p);


    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_transaksi.php';</script>";

    } elseif(empty($petugas)){
        echo "<script>alert('nama petugas telepon tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    }elseif(empty($jumlah)){
        echo "<script>alert('jumlah tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    }
    else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into transaksi (id_produk, id_pelanggan, id_petugas, tgl_transaksi) value ('".$nama_produk."','".$nama."','".$petugas."', '".$tanggal."')");
        $insert=mysqli_query($conn,"insert into detail_transaksi (qty, id_transaksi) value ('".$jumlah."', '".$d."')");
        if($insert){
            echo "<script>alert('Sukses membeli');location.href='tambah_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal membeli');location.href='tambah_transaksi.php';</script>";
        }
    }
}
?>