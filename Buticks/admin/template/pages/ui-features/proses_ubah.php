<?php
if($_POST){
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['desk'];
    $harga=$_POST['harga'];
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
     
    if(!in_array($ext,$ekstensi) ) {
        header("location:tambah_produk.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){		
            include "koneksi.php";
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], '../../../../gambar/'.$rand.'_'.$filename);
            $update=mysqli_query($conn,"update produk set nama_produk='".$nama_produk."',deskripsi='".$deskripsi."', harga='".$harga."', foto='".$xx."'  where id_produk = '".$id_produk."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses ubah produk');location.href='typography.php';</script>";
            } else {
                echo "<script>alert('Gagal ubah produk');location.href='ubah.php?id_produk=".$id_produk."';</script>";
            }
        }
        }
    }       
?>        
       


