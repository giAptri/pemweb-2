<?php require_once 'dbkoneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gskincare - all about beauty</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
             
               
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="https://www.instagram.com/ergiaap/?hl=id">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="https://www.youtube.com/channel/UCmIG4Ez-CeDl-eWT0jzf35w">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">G</span>Skincare</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="mau cari apa? klik disini!">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">kategori produk</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            
                        </div>
                        <a href="" class="nav-item nav-link">Skincare</a>
                        <a href="" class="nav-item nav-link">Bodycare</a>
                        <a href="" class="nav-item nav-link">Makeup</a>
                      
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">G</span>Skincare</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link">Home</a>
                            <a href="shop.php" class="nav-item nav-link ">Belanja</a>
                            <a href="form_pesanan.php" class="nav-item nav-link">Pesanan</a>
                            
                            
                        <div class="navbar-nav ml-auto py-0">
                            <a href="login.html" class="nav-item nav-link">Login</a>
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
  <br>        
        <!-- Contact Form Begin -->
        <div class="contact-form spad">
        <div class="container">
            <form action="proses_pesanan.php" method="POST">
                    <div class="form-group row">
                        <label for="nama_pemesan" class="col-4 col-form-label">Nama Pelanggan</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" placeholder="Masukkan Nama Lengkap*">
                        </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="alamat_pemesan" class="col-4 col-form-label">Alamat Pelanggan</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control" placeholder="Masukkan Alamat Lengkap*">
                        </div>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <input id="tanggal" name="tanggal" type="date" class="form-control" >
                        </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="no_hp" class="col-4 col-form-label">Nomor Telpon</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <input id="no_hp" name="no_hp" type="number" class="form-control" placeholder="Masukkan Nomor telpon*">
                        </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <input id="jumlah_pesanan" name="jumlah_pesanan" type="number" class="form-control" placeholder="Masukkan Jumlah*">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="produk_id" class="col-4 col-form-label">Produk ID</label> 
                        <div class="col-8">
                            <div class="input-group">
                            <?php 
                            $sqljenis = "SELECT * FROM produk";
                            $rsjenis = $dbh->query($sqljenis);
                            ?>
                            <select id="produk_id" name="produk_id" class="custom-select">
                            <?php 
                                if (isset($_GET["idedit"])) {
                                $id_jenis = $row["kategori_produk"];
                                $query2 = "SELECT * FROM produk WHERE id = '$id_jenis'";
                                $sql2 = $dbh->query($query2);
                                $row2 = $sql2->fetch();
                                echo '<option value="'.$row2['id'].'">'.$row2['nama'].'</option>';
                                }
                                    foreach($rsjenis as $rowjenis){
                            ?>
                                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
                            <?php
                                }
                            ?>
                            </select>
                            </div>
                        </div>
                    </div>
                    <br>
                
                    <button type="submit" name="proses" value="Simpan" class="site-btn">Simpan</button>
            </form>
        </div>
        </div>


     <!-- Footer Start -->
     <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">G</span>Skincare</h1>
                </a>
                <p>toko skincare yang lengkap, dan sesuai dengan yang kamu butuhkan!</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Jl. Raya klapanunggal Kab.Bogor</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>argyaarya14@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+62 8128-0160-417</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">link cepat</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>belanja</a>
  
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Tanya Kami</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">g skincare</a>. All Rights Reserved. Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com"></a><br>
                    Distributed By <a href="https://themewagon.com" target="_blank">projek semester2</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>