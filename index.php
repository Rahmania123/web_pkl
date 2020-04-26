<!doctype html>

<?php

//host, user, password, grafik
// '127.0.0.1', root, '', grafik
$link = mysqli_connect('localhost', 'root','', 'grafik');

//menguji error
if( !$link ){
	die('ada error'. mysqli_connect_error());
}
//membuat database
//$query = "CREATE DATABASE grafik";

$query = "SELECT * FROM donasi";
$hasil = mysqli_query($link, $query);

if ( mysqli_num_rows($hasil) > 0 ){ 
	
	while( $data = mysqli_fetch_assoc($hasil) ){
	}
}

//menutup koneksi
mysqli_close($link);

?>

<html lang="en">
  <head>
    <title>BMISamarinda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
	


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="styleee.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   

    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-12">
		  <div class="float-right">
			<a href="#" class="text-white"><span class="mr-2 text-white icon-instagram"></span> <span >@munzalan.samarinda</span></a>
			<br>
			<a href="#" class="text-white"><span class="mr-2 text-white icon-whatsapp"></span> <span >0811-588-7075 / 0811-5544-415</span></a></a>
            

            </div>

          </div>
          
        </div>
        
      </div>
    </div>
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
            
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="index.html" class="nav-link">Beranda</a></li>
				  <li><a href="kontak.php" class="nav-link">Kontak Kami</a></li>
				  <li><a href="login.html" class="nav-link">Login</a></li>
              </nav>
          
            </div>

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    
    <div class="owl-carousel slide-one-item">
      

      

      <div class="site-section-cover overlay img-bg-section"  >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center"style="background-image: url('images/saa.png'); ">
            <div class="col-md-12 col-lg-7">
              
            </div>
          </div>
        </div>

      </div>

      <div class="site-section-cover overlay img-bg-section"  >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center"style="background-image: url('images/aa.jpg'); ">
            <div class="col-md-12 col-lg-8">
              
            </div>
          </div>
        </div>

      </div>
      

    </div>
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/bb.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Selamat Datang <span>Orang-Orang Baik</span></h1>
						<h4>Mau Tau Gak Apa Keutamaan Bersedekah Dalam Islam</h4>
						<p>Allah SWT berfirman :</p>
						<p>
لَا خَيْرَ فِي كَثِيرٍ مِنْ نَجْوَاهُمْ إِلَّا مَنْ أَمَرَ بِصَدَقَةٍ أَوْ مَعْرُوفٍ أَوْ إِصْلَاحٍ بَيْنَ النَّاسِ ۚ وَمَنْ يَفْعَلْ ذَٰلِكَ ابْتِغَاءَ مَرْضَاتِ اللَّهِ فَسَوْفَ نُؤْتِيهِ أَجْرًا عَظِيمًا </p>
						<p>Artinya : </p>
						<p>“Tidak ada kebaikan pada kebanyakan bisikan-bisikan mereka, kecuali bisikan-bisikan dari orang yang menyuruh (manusia) memberi sedekah, atau berbuat ma’ruf atau mengadakan perdamaian di antara manusia. Dan barangsiapa yang berbuat demikian karena mencari keridhaan Allah, maka kelak Kami akan memberi kepadanya pahala yang besar.” (QS An Nisaa ayat 114).</p>
			
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						“Sedekah itu tidak akan mengurangi harta. Tidak ada orang yang memberi maaf kepada orang lain, melainkan Allah akan menambah kemuliaannya. Dan tidak ada orang yang merendahkan diri karena Allah, melainkan Allah akan mengangkat derajatnya.” (HR. Muslim)
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section-title text-center">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="title text-uppercase">Sedekah Akbar Indonesia</h2>
                  <p class="sub-title">Sejak tahun 2012. Sedekah Akbar dilaksanakan setahun sekali di Pontianak dan kini dicopy paste ke Kota-kota lainnya. Sedekah Akbar juga pernah bersinergi dengan Serikat Saudagar Nusantara untuk mengadakan Majelis Dia Saudagar Nusantara bersama 5000 santri yatim dan penghafal Qur'an.</p>
				  <p class="sub-title">Sedekah Akbar dengan tagline Semua Bisa Sedekah dirancang untuk mempertemukan Orang Tua Asuh (donatur infaq) dengan para santri dan berdoa bersama.</p>
              </div>
          </div>
      </div>
	  <br>
    <br>
    
	<!-- End QT -->
	
	<!-- Start Gallery -->

	<!-- end section -->
	  
	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-hosting"></i></span>
					<p class="stat_count">12000</p>
					<h3>Target</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-domain-registration"></i></span>
					<p class="stat_count">24000</p>
					<h3>Terkumpul</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-mail"></i></span>
					<p class="stat_count">5000</p>
					<h3>Orang Tua Asuh</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

   
	<!-- End Gallery -->
	
	 <head>

        <link rel="stylesheet" type="text/css" href="css/1.css">
    
        <center><a href="cba.html" class="nav-link"> <input type="submit" class="tombol_login" value="Yuk Infaq Sekarang"> </center>
    </head>
	
	
    
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>

