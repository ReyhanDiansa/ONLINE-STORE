<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Buticks. Admin</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>

    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.php" style="text-decoration:none;color:white;"><h3 >BUTICKS.<h3></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php" style="text-decoration:none;color:white; ">B.</a>
          <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu" style="color:white;"></span>
            </button> -->
        </div>
        <ul class="nav" >
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/iconadmin.svg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                
                  <h4 class="mb-0 font-weight-normal"><?=$_SESSION['nama_petugas'] ;?></h4>
                  <!-- <span>Gold Member</span> -->
                </div>
              
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              <!-- <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a> -->
              <a class="dropdown-item preview-item" href="logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Logout</p>
                    </div>
                  </a>
                <div class="dropdown-divider"></div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <h4 class="menu-title">Beranda</h4>
            </a>
          </li>
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Produk</span>
              <i class="menu-arrow"></i>
            </a> -->
            <!-- <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.php">Data Produk</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.php">Edit Produk</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div> -->
          <!-- </li> -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/ui-features/typography.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Edit Produk</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Tambah Produk</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Histori</span>
            </a>
          </li>
          
          <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu" style="color:white;"></span>
            </button> -->
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
        </ul>

        <button class="navbar-toggler type="button" style="width: 100%" data-toggle="minimize">
              <span class="menu-icon" style="color:white;">
            <i class="mdi mdi-menu"></i>
            </span>
            </button>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button> -->
            
  
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>

        <!-- partial -->
<?php
include "koneksi.php";
$query = mysqli_query($conn, "select sum(d.subtotal), year(t.tgl_transaksi), month(t.tgl_transaksi) from transaksi t join detail_transaksi d on d.id_transaksi=t.id_transaksi where month(t.tgl_transaksi)!=(select month(now()))GROUP BY year(t.tgl_transaksi), month(t.tgl_transaksi)ORDER BY month(t.tgl_transaksi) desc limit 4 " );

$qry=mysqli_query($conn, "select sum(subtotal) from detail_transaksi");
$jmlpro=mysqli_query($conn, "select count(id_produk) from produk");
$jmlpel=mysqli_query($conn, "select count(id_pelanggan) from pelanggan");

$today = mysqli_query($conn, "select sum(d.subtotal), date(t.tgl_transaksi) from transaksi t join detail_transaksi d on d.id_transaksi=t.id_transaksi where date(t.tgl_transaksi)=(select date(now()))GROUP BY date(t.tgl_transaksi) " );
$co=mysqli_fetch_array($today);
$hari = mysqli_query($conn, "select sum(d.subtotal), date(t.tgl_transaksi) from transaksi t join detail_transaksi d on d.id_transaksi=t.id_transaksi where date(t.tgl_transaksi)=(select date(now()))GROUP BY date(t.tgl_transaksi) " );

$bln = mysqli_query($conn, "select sum(d.subtotal), month(t.tgl_transaksi) from transaksi t join detail_transaksi d on d.id_transaksi=t.id_transaksi where month(t.tgl_transaksi)=(select month(now()))GROUP BY month(t.tgl_transaksi) " );
$mo=mysqli_fetch_array($bln);
$month = mysqli_query($conn, "select sum(d.subtotal), month(t.tgl_transaksi) from transaksi t join detail_transaksi d on d.id_transaksi=t.id_transaksi where month(t.tgl_transaksi)=(select month(now()))GROUP BY month(t.tgl_transaksi) " );




                ?>



        <div class="main-panel">
          <div class="content-wrapper">
          <div class="row">
          <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Tanggal Hari ini</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo date("d/m/Y");?></h2>
                        </div>
                        <!-- <h6 class="text-muted font-weight-normal">11.38% Since last month</h6> -->
                      </div>
                      <!-- <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Pemasukan Sementara</h5>
                    <?php 
                    if($co['sum(d.subtotal)']==0){
                      echo "belum ada pemasukan hari ini";
                    }
                    else{
                    ?>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <?php  
                        while($x=mysqli_fetch_array($hari)){
                        ?>
                          <h2 class="mb-0"><?php echo  number_format($x['sum(d.subtotal)']) ;?></h2>
                          <?php
                        }
                        ?>
                        </div>
                        
                        <h6 style="color:#0894e4;">Hari ini</h6>
                      </div>
                      <!-- <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div> -->
                    </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Pemasukan Sementara</h5>
                  
                    <?php 
                    if($mo['sum(d.subtotal)']==0){
                      echo "belum ada pemasukan Bulan ini";
                    }
                    else{
                    ?>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <?php  
                        while($z=mysqli_fetch_array($month)){
                        ?>
                          <h2 class="mb-0"><?php echo  number_format($z['sum(d.subtotal)']) ;?></h2>
                          <?php
                        }
                        ?>
                        </div>
                        
                        <h6 style="color:#0894e4;">Bulan ini</h6>
                      </div>
                      <!-- <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div> -->
                    </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
                      </div>
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Jumlah Barang yang dijual</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <?php  
                        while($s=mysqli_fetch_array($jmlpro)){
                        ?>
                          <h2 class="mb-0"><?php echo  number_format($s['count(id_produk)']) ;?></h2>
                        </div>
                        <?php
                        }
                        ?>
                        <!-- <h6 class="text-muted font-weight-normal">11.38% Since last month</h6> -->
                      </div>
                      <!-- <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Total Seluruh Pemasukan</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <?php  
                        while($f=mysqli_fetch_array($qry)){
                        ?>
                          <h3 class="mb-0"><?php echo "Rp. " . number_format($f['sum(subtotal)']) ;?></h3>
                          <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                        </div>
                        <?php
                        }
                        ?>
                      </div>
                      <!-- <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Jumlah Pelanggan </h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <?php  
                        while($d=mysqli_fetch_array($jmlpel)){
                        ?>
                          <h2 class="mb-0"><?php echo  number_format($d['count(id_pelanggan)']) ;?></h2>
                        </div>
                        <?php
                        }
                        ?>
                        <!-- <h6 class="text-muted font-weight-normal">11.38% Since last month</h6> -->
                      </div>
                      <!-- <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <?php
          $g=mysqli_num_rows($query);
          if($g==0){
            echo "<h3 style='color:black;'>tidak ada pemasukan beberapa bulan terakhir<h3>";
          }elseif($g>0){
            echo "<h3 style='color:black;'>Pemasukan $g bulan terakhir<h3>";
          }
          ?>

          
    
          <div class="row">
              <?php 

                        while($g=mysqli_fetch_array($query)){
                        ?>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                    <!-- <h3 class="text-muted font-weight-normal">Penjualan Bulan ini</h3> -->
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?php echo "Rp. " . number_format($g['sum(d.subtotal)']) ;?></h3>
                          <!-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p> -->
                          
                        </div><br>
                        <h6 style="color:#0894e4;";"><?php  echo "0".($g['month(t.tgl_transaksi)'])."-".($g['year(t.tgl_transaksi)']);?></h6>
                      </div>
                      
                    </div>

                  </div>
                </div>
              </div>

              <?php
                        }
                        ?>
              
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer> -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>