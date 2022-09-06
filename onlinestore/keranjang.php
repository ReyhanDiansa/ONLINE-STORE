
<h2>Daftar Buku di Keranjang</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th><th>Nama Buku</th><th>Jumlah</th><th>Harga</th><th>Total Bayar</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        session_start();
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk): 
$subtotal = $val_produk['qty']*$val_produk['harga'];
        
        ?>
            <tr>
                <td><?=($key_produk+1)?></td>
                <td><?=$val_produk['nama_produk']?></td>
                <td><?=$val_produk['qty']?></td>
                <td><?=$val_produk['harga']?></td>
                <td><?=$subtotal?></td>
                <td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
