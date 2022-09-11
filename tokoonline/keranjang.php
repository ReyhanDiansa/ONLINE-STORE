<h6>Daftar Keranjang</h6>

           <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr class="text-xs font-weight-bold opacity-6">
                      <th>No</th>
                      <th class="align-middle text-left">Nama Produk</th>
                      <th class="align-middle text-left">Jumlah</th>
                      <th class="align-middle text-left">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
                    <tr>
                        <td><?=($key_produk+1)?></td><td><?=$val_produk['nama_produk']?></td><td><?=$val_produk['qty']?></td><td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
                    </tr>

                    <?php endforeach ?>

                  </tbody>
                 
                </table>
                <a href="checkout.php" class="btn btn-primary">Check Out</a>
                <a class="btn btn-warning" href="../pages/dashboard.php" >Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </div>
                
                </div>
                </div>