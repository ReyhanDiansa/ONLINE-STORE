<table class="table align-items-center mb-0">
                  <thead>
                    <tr class="text-xs font-weight-bold opacity-6">
                      <th>No</th>
                      <th class="align-middle text-left">Tanggal Beli</th>
                      <th class="align-middle text-left">Nama Produk</th>
                      <th class="align-middle text-left">Foto Produk</th>
                      <th class="align-middle text-left">Jumlah Produk</th>
                      <th class="align-middle text-left">Harga</th>
                      <th class="align-middle text-left">Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include 'koneksi.php';
                      $qry_histori=mysqli_query($conn,"select produk.nama_produk, tgl_transaksi, qty, produk.harga, produk.foto_produk, subtotal from detail_transaksi JOIN produk ON detail_transaksi.id_produk = produk.id_produk order by id_detail_transaksi desc;");
                      $no=0;
                      while($dt_histori=mysqli_fetch_array($qry_histori)){
                      $no++;?>

                      <tr class="text-xs font-weight-bold">
                          <td class="align-middle text-left"><?=$no?></td>
                          <td class="align-middle text-left"><?=$dt_histori['tgl_transaksi']?></td>
                          <td class="align-middle text-left"><?=$dt_histori['nama_produk']?></td>
                          <td><img src="assets/foto_produk/<?=$dt_histori['foto_produk']?>" width="100px";></td>
                          <td class="align-middle text-left"><?=$dt_histori['qty']?></td>
                          <td class="align-middle text-left"><?=$dt_histori['harga']?></td>
                          <td class="align-middle text-left"><?=$dt_histori['subtotal']?></td> 
                          <td class="text-xs font-weight-bold">
                          

                        
                      </tr>
                      <?php
                      }
                      ?>
                  </tbody>
                </table>