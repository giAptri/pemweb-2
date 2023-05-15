<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM produk WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Product - </title>
        <link rel="icon" href="../img/logo/2.png">
    <!-- Icon -->
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../home.php"><img src="../img/logo/3.png" alt="" style="width:150px;"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../home.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="list-produk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-arrow-left"></i></div>
                                Back
                            </a>
                            <a class="nav-link active" href="list-produk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-bag"></i></div>
                                Produk
                            </a>
                            <a class="nav-link" href="list-merk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Merk
                            </a>
                            <a class="nav-link" href="list-pesanan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Daftar Pesanan
                            </a><br><br>
                            <a class="nav-link" href="../home.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-arrow-left"></i></div>
                                Log Out
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                    <div class="jumbotron jumbotron-fluid" style="background-color: rgb(33,37,41); height: 150px; padding: 20px; margin: 10px;">
                        <div class="container" style="background: url(../img/banner/banner3.png); padding-bottom: 2px;  padding-top: 25px;">
                            <h1 class="mt-4 text-white">Edit Produk</h1>
                        </div>
                </div>
                <form method="POST" action="proses_produk.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-user"></i>
                        </div>
                        </div> 
                        <input id="nama" name="nama" type="text" class="form-control" value="<?=$row['nama'];?>">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok" class="col-4 col-form-label">Stok</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                        </div> 
                        <input id="stok" name="stok" type="number" class="form-control" value="<?=$row['stok']?>">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-4 col-form-label">Harga</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-dollar"></i>
                        </div>
                        </div> 
                        <input id="harga" name="harga" value="<?=$row['harga']?>" type="number" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-arrow-circle-right"></i>
                        </div>
                        </div> 
                        <input id="deskripsi" name="deskripsi" value="<?=$row['deskripsi']?>" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori_produk_id" class="col-4 col-form-label">Produk ID</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-arrow-circle-up"></i>
                        </div>
                        </div>
                        <?php 
                        $sqljenis = "SELECT * FROM kategori_produk";
                        $rsjenis = $dbh->query($sqljenis);
                        ?>
                        <select id="kategori_produk_id" name="kategori_produk_id" class="custom-select">
                        <?php 
                            if (isset($_GET["idedit"])) {
                            $id_jenis = $row["kategori_produk"];
                            $query2 = "SELECT * FROM kategori_produk WHERE id = '$id_jenis'";
                            $sql2 = $dbh->query($query2);
                            $row2 = $sql2->fetch();
                            echo '<option value="'.$row2['id'].'">'.$row2['kategori_produk'].'</option>';
                            }
                                foreach($rsjenis as $rowjenis){
                        ?>
                            <option value="<?=$rowjenis['id']?>"><?=$rowjenis['kategori_produk']?></option>
                        <?php
                            }
                        ?>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-4 col-form-label">Link Foto</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-paperclip"></i>
                        </div>
                        </div> 
                        <input id="foto" name="foto" value="<?=$row['foto']?>" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update"/>
                    <input type="hidden" name="idedit" value="<?=$_idedit;?>">
                    </div>
                </div>
                </form>
            </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; AzkaZharari 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
