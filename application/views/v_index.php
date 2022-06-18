<!DOCTYPE html>
<html>

<head>
	<!-- Basic -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- Site Metas -->
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<link rel="shortcut icon" href="images/favicon.png" type="">

	<title> Petlov </title>

	<!-- bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css" />

	<!-- fonts style -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

	<!--owl slider stylesheet -->
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

	<!-- font awesome style -->
	<link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" />

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" />
	<!-- responsive style -->
	<link href="<?php echo base_url()?>assets/css/responsive.css" rel="stylesheet" />

</head>

<body>

	<div class="hero_area">

		<div class="hero_bg_box">
			<img src="<?php echo base_url()?>assets/images/hero-bg.png" alt="">
		</div>

		<!-- header section strats -->
		<header class="header_section">
			<div class="container">
				<nav class="navbar navbar-expand-lg custom_nav-container ">
					<a class="navbar-brand" href="index.html">
						<span>
						Petl<i class="fas fa-paw"></i>v
						</span>
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class=""> </span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="<?php echo base_url('Home/index')?>">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('Shop/index')?>"> Shop</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('Chat/index')?>"> Chat Dokter</a>
							</li>
							<li class="nav-item">
							<?php if($this->session->userdata('logged_in') == TRUE){?>
								<a class="nav-link" href="<?php echo base_url('Shop/pesanan')?>"> Pesanan Anda</a>	
							<?php } 
								else { 
							?>
								<a class="nav-link" href="<?php echo base_url('Login/index')?>"> Pesanan Anda</a>	
							<?php } 
							?>
							</li>
							
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-user"></i>
								</a>
								<?php if($this->session->userdata('logged_in') == TRUE){?>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">
										<?php echo $this->session->userdata('nama_user') ?>
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?php echo base_url()?>Login/logout">Logout</a>
								</div>
								<?php } 
 							  else { 
								?>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="<?php echo base_url()?>Login/index">Login</a>
								</div>
								<?php } ?>
							</li>

							<li class="nav-item dropdown">
								<?php if($this->session->userdata('logged_in') == TRUE){?>
									<a class="nav-link" href="<?php echo base_url('Shop/view_cart')?>"> <i class="fas fa-shopping-cart"></i></a>	
								<?php } 
									else { 
								?>
									<a class="nav-link" href="<?php echo base_url('Login/index')?>"> <i class="fas fa-shopping-cart"></i></a>
								<?php } 
								?>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!-- end header section -->
		<!-- slider section -->
		<section class="slider_section ">
			<div id="customCarousel1" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="container ">
							<div class="row">
								<div class="col-md-7">
									<div class="detail-box">
										<h1>
											Best place for your pet needs.
										</h1>
										<p>
											Kami menyediakan kebutuhan untuk hewan peliharaan anda
										</p>
										<div class="btn-box">
											<a href="<?php echo base_url('Shop/index')?>" class="btn1">
												Belanja Sekarang!
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item ">
						<div class="container ">
							<div class="row">
								<div class="col-md-7">
									<div class="detail-box">
										<h1>
											Contact our best doctor.
										</h1>
										<p>
											Konsultasikan kesehatan hewan peliharaan dengan dokter-dokter yang terbaik
										</p>
										<div class="btn-box">
											<a href="<?php echo base_url('Chat/index')?>" class="btn1">
												Chat Sekarang!
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<ol class="carousel-indicators">
					<li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
					<li data-target="#customCarousel1" data-slide-to="1"></li>
				</ol>
			</div>

		</section>
	</div>
	<!-- END SLIDER SECTION -->

	
	<!-- Artikel section -->

	<section id="projects">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>Artikel</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-5">
            <div class="card">
			<img src="<?php echo base_url()?>assets/images/artikel/1.jpg" class="card-img-top" alt="error" style="height: 200px;object-fit:cover"  />
              <div class="card-body text-center">
                <a href="#" style="color:black"><h5 class="card-title" style="text-align:left">6 Alasan Punya Hewan Peliharaan Bisa Menjaga Kesehatan Mental Anda</h5></a>
                <p class="card-text" style="text-align:left">Apakah Anda sedang stres atau merasa tertekan? Jika Anda tinggal dengan hewan peliharaan, Anda mungkin dapat menjaga kesehatan mental Anda.Ya, ternyata kucing atau anjing kecil Anda adalah satu-satunya terapi yang Anda butuhkan untuk mengatasi masalah kesehatan mental seperti Depresi, stres, dan lain-lain.Berikut beberapa alasan mempunyai hewan dapat menjaga kesehatan mental anda.</p>
                <a href="<?php echo base_url().'Home/artikel'?>" class="btn" style="background-color: #178066 ; color:#ffffff">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card">
			<img src="<?php echo base_url()?>assets/images/artikel2/2.png" class="card-img-top" alt="error" style="height: 200px;object-fit:cover"  />
              <div class="card-body text-center">
                <a href="<?php echo base_url('Home/artikel2')?>" style="color:black"><h5 class="card-title" style="text-align:left">17 Hewan Peliharaan yang Mudah Dirawat di Rumah</h5></a>
                <p class="card-text" style="text-align:left">Kamu kesepian di rumah dan ingin memiliki hewan peliharaan ? Ada banyak sekali hewan yang dapat kamu pelihara dengan mudah di rumah dan dapat menemani kamu sehari-hari.Selain dapat menemani dalam keseharian mu dengan adanya hewan peliharaan suasana rumah kamu juga dapat menjadi lebih hangat .Berikut 17 hewan yang dapat kamu peliharan dengan mudah dirumah dan tentunya dapat menemani hari-hari kamu.</p>
                <a href="<?php echo base_url('Home/artikel2')?>" class="btn" style="background-color: #178066 ; color:#ffffff">Read More</a>
              </div>
            </div>
          </div>
		  <div class="col-lg-4 mb-5">
            <div class="card">
			<img src="<?php echo base_url()?>assets/images/artikel/3.jpg" class="card-img-top" alt="error" style="height: 200px;object-fit:cover"  />
              <div class="card-body text-center">
                <a href="<?php echo base_url('Home/artikel3')?>" style="color:black"><h5 class="card-title" style="text-align:left">Mengharukan, Setelah 14 Tahun Hilang Kucing Ini Bertemu Lagi dengan Tuannya</h5></a>
                <p class="card-text" style="text-align:left">Ketika hewan peliharaan mendapatkan kasih sayang yang tulus dari tuannya, tidak jarang hewan tersebut akan menjadi hewan yang begitu setia. Hewan itu bahkan bisa menjadi teman sekaligus sahabat yang akan mengingat sang tuan hingga kapan pun.Jika selama ini kita mengenal anjing sebagai hewan yang begitu setia ke tuannya, kucing ternyata juga tak kalah setia dan mengingat sang tuan dengan sangat baik lho. </p>
                <a href="<?php echo base_url('Home/artikel3')?>" class="btn" style="background-color: #178066 ; color:#ffffff">Read More</a>
              </div>
            </div>
          </div>
		  
        </div>
      </div>
    </section>

	<!-- end artikel section -->

	<!-- ARTIKEL SECTION 2 -->
	<section id="projects">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5">
            <div class="card">
			<img src="<?php echo base_url()?>assets/images/artikel2/4.png" class="card-img-top" alt="error" style="height: 200px;object-fit:cover"  />
              <div class="card-body text-center">
                <a href="<?php echo base_url('Home/artikel4')?>" style="color:black"><h5 class="card-title" style="text-align:left">7 Cara Merawat Kucing Persia agar Sehat, Bebas Kutu, dan Lebat Bulunya </h5></a>
                <p class="card-text" style="text-align:left">Kucing dikenal populer menjadi hewan peliharaan karena wajahnya yang lucu dan tingkahnya yang menggemaskan, termasuk di antaranya kucing persia. Kucing jenis persia ini memiliki ciri khas berupa bulunya yang lebat dibandingkan dengan kucing lain. Semakin menggemaskan karena kucing ini umumnya gemuk, tambun, dan besar. Bentuk hidungnya juga lebih pesek dan berwajah bulat.</p>
                <a href="<?php echo base_url('Home/artikel4')?>" class="btn" style="background-color: #178066 ; color:#ffffff">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="card">
			<img src="<?php echo base_url()?>assets/images/artikel/4.jpg" class="card-img-top" alt="error" style="height: 200px;object-fit:cover"  />
              <div class="card-body text-center">
                <a href="<?php echo base_url('Home/artikel5')?>" style="color:black"><h5 class="card-title" style="text-align:left">7 Bau yang Tidak Disukai Kucing dari Buah hingga Kotak Pasir yang Kotor </h5></a>
                <p class="card-text" style="text-align:left">Kucing merupakan salah satu hewan peliharaan yang cukup menggemaskan. Saat ini banyak sekali yang membuat sebuah akun untuk merekam dan memotret beragam tingkah lucu para kucing. Bahkan sampai ada julukan majikan untuk para kucing karena dianggap sebagai raja dan ratu di rumah pemiliknya. Hewan peliharaan satu ini juga memiliki indra penciuman yang cukup sensitif, lo.</p>
                <a href="<?php echo base_url('Home/artikel5')?>" class="btn" style="background-color: #178066 ; color:#ffffff">Read More</a>
              </div>
            </div>
          </div>

		  <div class="col-lg-4 mb-5">
            <div class="card">
			<img src="<?php echo base_url()?>assets/images/artikel2/7.png" class="card-img-top" alt="error" style="height: 200px;object-fit:cover"  />
              <div class="card-body text-center">
                <a href="<?php echo base_url('Home/artikel6')?>" style="color:black"><h5 class="card-title" style="text-align:left">5 Cara merawat dan memelihara sugar glider</h5></a>
                <p class="card-text" style="text-align:left">Hewan yang masuk jenis posum ini memiliki ukuran yang kecil dengan penampilan yang lucu dan menggemaskan. Tak heran bila banyak yang tertarik menjadikan hewan kecil ini sebagai binatang peliharaan.Namun, ada beberapa hal yang harus kamu perhatikan sebelum memutuskan untuk memelihara sugar glider. Salah satunya adalah memahami beberapa tips atau cara merawat sugar glider yang benar.</p>
                <a href="<?php echo base_url('Home/artikel6')?>" class="btn" style="background-color: #178066 ; color:#ffffff">Read More</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
<!-- END ARTIKEL SECTION 2 -->

	<!-- footer section -->
	<footer class="footer_section">
	<div class="container">
			<div class="row">
			<div class="col-md-6 col-lg-4 footer_col">
					<div class="footer-links">
						<h1>Petl<i class="fas fa-paw"></i>v</h1>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 footer_col">
					<div class="footer_contact">
						<h4>
							CONTACT US
						</h4>
						<div class="contact_link_box">
							<a href="">
							<i class="fab fa-whatsapp"></i>
								<span>
									+6282139126487
								</span>
							</a>
							<a href="">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<span>
									petlovmalang@gmail.com
								</span>
							</a>
						</div>
					</div>
				
				</div>
				<div class="col-md-6 col-lg-4 footer_col">
					<div class="footer_detail">
						<h4>
							ABOUT US
						</h4>
						<p>
						 Petlov merupakan website yang kami buat untuk memfasilitasi para pecinta hewan 
						 agar lebih mudah dalam melakukan transaksi dalam kebutuhan hewan, kebersihan hewan, serta kesehatan hewan.
						 Selain itu, membantu pet shop agar mendapatkan jaungkan pasar yang lebih luas dan juga dokter dalam mendapatkan pasien.

						</p>
					</div>
				</div>
				
			
			</div>
			<div class="footer-info">
				<p>
					&copy; <span id="displayYear"></span> All Rights Reserved By
					<a href="<?php echo base_url('Home/home_petshop')?>">Petlov<br><br></a>
				</p>

			</div>
		</div>
	</footer>
	<!-- footer section -->

	<!-- jQery -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-3.4.1.min.js"></script>
	<!-- popper js -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
	<!-- owl slider -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
	</script>
	<!-- custom js -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/custom.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
	</script>
	<script src="https://kit.fontawesome.com/d87ebeff25.js" crossorigin="anonymous"></script>
	<!-- End Google Map -->

	<!-- chat live -->
	<script>
	// function initFreshChat() {
	// 	window.fcWidget.init({
	// 	token: "dee35aed-e31b-4c8b-a705-599b0ddd98a0",
	// 	host: "https://wchat.freshchat.com"
	// 	});
	// }
	// function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"Freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
	
	(function (d, w, c) { if(!d.getElementById("spd-busns-spt")) { var n = d.getElementsByTagName('script')[0], s = d.createElement('script'); var loaded = false; s.id = "spd-busns-spt"; s.async = "async"; s.setAttribute("data-self-init", "false"); s.setAttribute("data-init-type", "opt"); s.src = 'https://cdn.freshbots.ai/assets/share/js/freshbots.min.js'; s.setAttribute("data-client", "42e7075a43776c125391e419b948317986f1eda1"); s.setAttribute("data-bot-hash", "d58dbb3821972dae51c140b82fb5296f30af8b57"); s.setAttribute("data-env", "prod"); s.setAttribute("data-region", "us"); if (c) { s.onreadystatechange = s.onload = function () { if (!loaded) { c(); } loaded = true; }; } n.parentNode.insertBefore(s, n); } }) (document, window, function () { Freshbots.initiateWidget({ autoInitChat: false, getClientParams: function () { return ; } }, function(successResponse) { }, function(errorResponse) { }); }); 
	</script>

</body>

</html>
