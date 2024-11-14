<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Sistem Informasi Pelayanan Masyarakat</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/logo.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-white navbar-custom fixed-top">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand" href="index.html"><img src="images/dinsos.png" width="200"></a>
            
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php">HOME</a>
                </li>
                
                <!-- Dropdown Menu -->          
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#date" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">TENTANG</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="struktur.php"><span class="item-text">STUKTUR</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="visimisi.php"><span class="item-text">VISI & MISI</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="sejarah.php"><span class="item-text">SEJARAH</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#date" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">LAYANAN PUBLIK</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="dashboard/user/login.php"><span class="item-text">PERUBAHAN BPJS MANDIRI KE BPJS GRATIS</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="dashboard/user/login.php"><span class="item-text">DATA TERPADU KESEJAHTERAAN SOSIAL</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="dashboard/user/login.php"><span class="item-text">PENGECEKAN BANTUAN SOSIAL</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="kontak.php">KONTAK</a>
                </li>
                

            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://facebook.com/dinsospmd.kuansing">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://www.instagram.com/dinsospmd.kuansing/">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="countdown">
                            <b> Hai Selamat Datang.. </b>
                        </div>
                        <h1>Sistem Informasi Pelayanan Masyarakat</h1>
                        <a class="btn-solid-lg page-scroll" href="dashboard/user/register.php">DAFTAR</a>
                        <a class="btn-outline-lg page-scroll" href="dashboard/user/login.php">LOGIN</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        
        <!-- Image Slider -->
        <div class="outer-container">
            <div class="slider-container">
                <div class="swiper-container image-slider-1">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper">
                            <img class="img-fluid" src="images/page2.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                    </div> <!-- end of swiper-wrapper -->
                
                    
                </div> <!-- end of swiper-container -->
            </div> <!-- end of slider-container -->
        </div> <!-- end of outer-container -->
        <!-- end of image slider -->

    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Registration -->
    <div id="register" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                     <img class="img-fluid" src="images/kpldinas.jpg" alt="alternative" width="400px">
                 </div>
                 <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Halaman Daftar</h2>
                        <p>Silahkan Daftar dibagian ini untuk memasuki halaman login dan mengakses dibagian bawah ini :</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Perubahan BPJS Mandiri ke BPJS Gratis</strong> </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Data Terpadu Kesejahteraan Sosial</strong> </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Pengecekan Bantuan Sosial</strong> </div>
                            </li>
                            </ul>
                            <div class="form-group">
                                <a href="dashboard/user/register.php"><button type="submit" class="form-control-submit-button">DAFTAR</button></a>
                            </div>
                            <div class="form-message">
                                <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of form-container -->
                    <!-- end of registration form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of registration -->

    <!-- Instructor -->
    <div id="instructor" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/detail3.jpg" alt="alternative" width="400px">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Cara Memvalidasi Data</h2>
                        <p>Jika Anda berencana untuk menggunakan layanan Pemberdayaan Sosial, harap ingat untuk selalu membawa Kartu Keluarga Anda demi kenyamanan bersama karena akan sangat berguna untuk melakukan validasi data.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of instructor -->

    <!-- Instructor -->
    <div id="instructor" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/detail4.jpg" alt="alternative" width="400px">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Urgensi Keberadaan BUMDES</h2>
                        <p>Hai #SobatDesa,
Dalam rangka mempercepat pertumbuhan ekonomi desa, pemerintah dengan kebijakannya mendorong pembentukan Badan Usaha Milik Desa.<br>
Kehadiran BUMDes adalah salah satu sarana penunjang peningkatan kesejahteraan masyarakat desa, tentunya harus didukung dengan pengelolaan yang baik.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of instructor -->


    <!-- Instructor -->
    <div id="instructor" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/detail2.jpg" alt="alternative" width="400px">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Bantuan Sembako Cair</h2>
                        <p>Mulai Rabu besok, Pemerintah mulai menyalurkan Bantuan Pangan Non Tunai (BPNT) tahap I tahun 2022. Penyaluran akan dilakukan di kantor pos yang ada di Kabupaten Kuansing.<br>
                       "Jumlah data bayar yang diterima kantor ada 6.691 Keluarga Penerima Manfaat (KPM) yang akan menerima bantuan ini," ujar Pelaksana tugas (Plt) Kepala Dinas Sosial Pemberdayaan Masyarakat dan Desa Kuansing, Napisman kepada RIAUONLINE.CO.ID, Selasa, 22 Februari 2022.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of instructor -->


<!-- Registration -->
    <div id="register" class="form-1">
        <div class="container">
                        <center>
                        <h2>Halaman Profil Plt Dinas Sosial</h2>
                       <img class="img-fluid" src="images/profil (1).jpg" alt="alternative" width="400px">
                        </center>
                        </div> <!-- end of text-container -->
                </div> <!-- end of form-container -->
                    <!-- end of registration form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of registration -->

    <!-- Details Lightbox -->
	<div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>SEO Training Course</h3>
                    <hr>
                    <h5>For everybody</h5>
                    <p>The training course is dedicates to anyone passionate about the web and in need of improving their current online presence.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Link building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Know your current position</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Partnering with blogs</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Naming your images</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Creating good sitemaps</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Writing for humans</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#register">SIGN UP</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox -->


    <!-- Video -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Video Pacu Jalur 2022</h2>

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <center>
                            <video width="1000" height="500" controls>
                            <source src="images/pacujalur.mp4" type="video/mp4">
                            </video></center>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of video -->

  
                            
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of text slider -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-col first">
                        <h5>Dinas Sosial<br> Kabupaten Kuantan Singingi</h5>
                        <p class="p-small">Inovasi ini merupakan aksi perubahan kinerja organisasi dalam mewujudkan pelayanan penyandang masalah kesejahteraan sosial yang optimal</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-3">
                    <div class="footer-col second">
                        <h5>Menu</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="index.php">Home</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#">Tentang</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#">Layanan Publik</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="kontak.php">Kontak</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-3">
                    <div class="footer-col third">
                        <h5>Kontak</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#">Alamat</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#">Telp</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#">Email</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-3">
                    <div class="footer-col fourth">
                        <h5>Social Media</h5>
                        <p class="p-small">For news & updates follow us</p>
                        <a href="https://facebook.com/dinsospmd.kuansing">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/dinsospmd.kuansing">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2022 <b>Sistem Informasi Dinas Sosial Kab. Kuantan Singingi</b> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>