<?php 
    include "koneksi.php";
    $qry_detail_prd=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_prd=mysqli_fetch_array($qry_detail_prd);
?>
<h2>Pinjam Buku</h2>
<div class="row">
    <div class="col-md-4">
        <img src="gambar/<?=$dt_prd['foto']?>" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_produk=<?=$dt_prd['id_produk']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Buku</td><td><?=$dt_prd['nama_produk']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td><td><?=$dt_prd['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Pinjam</td><td><input type="number" name="jml" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="BELI"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>