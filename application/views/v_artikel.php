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
  <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.png" type="">

  <title> Petlov </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url()?>assets/css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index">
            <span>
            Petl<i class="fas fa-paw"></i>v
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav">
						<li class="nav-item active">
								<a class="nav-link" href="<?php echo base_url('Home/index')?>">Beranda<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('Shop/index')?>">Belanja</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('Chat/index')?>"> Chat </a>
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
							</ul>
          </div>
        </nav>
      </div>
    </header>
  </div>
  
  <!-- END HEADER SECTION -->

  <body>
  <div class="container">
  <h2 style="margin-top:25px;margin-bottom:15px" class="text-center"><b>6 Alasan Punya Hewan Peliharaan Bisa Menjaga Kesehatan Mental Anda</b></h2>
  <center><img src="<?php echo base_url()?>assets/images/artikel/1.jpg" alt="" style="height : 300px"  /></center>
  <br>
  <p>Apakah Anda sedang stres atau merasa tertekan? Jika Anda tinggal dengan hewan peliharaan, Anda mungkin dapat menjaga kesehatan mental Anda.</p>
  <p>Ya, ternyata kucing atau anjing kecil Anda adalah satu-satunya terapi yang Anda butuhkan untuk mengatasi masalah kesehatan mental seperti Depresi, stres, kecemasan dan banyak lagi.</p>
  <p>Itu benar, Anda mungkin berpikir bahwa Andalah yang merawat mereka, tetapi mereka mendukung dan merawat Anda dengan cara yang tidak terucapkan.</p>
  <p>Menurut Medical News Today, memiliki hewan peliharaan membantu orang yang mengidap masalah kesehatan mental yang parah merasakan rasa aman, stabilitas dan menemukan makna dalam hidup.</p>
  <p>Menurut sebuah penelitian, kucing dan anjing memiliki kualitas bawaan untuk membuat Anda merasa nyaman dan aman. Mereka mencintai dalam bentuk yang paling murni dan cinta itu dapat membantu mengatasi kesulitan hidup. Masih tidak percaya?</p>
  <p>Berikut enam cara hewan peliharaan Anda dapat meningkatkan kesehatan mental Anda, dilansir dari Pinkvilla, Selasa (16/11/2021).</p>
  <h5 style="margin-bottom:15px"><b>1. Baik untuk Kesehatan Mental</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/1.1.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Membawa hewan peliharaan Anda berjalan-jalan, mendaki atau berlari dapat membantumu tetap bugar dan memenuhi kebutuhan olahraga harianmu. Berolahraga secara teratur dapat berdampak baik pada kesehatan mental Anda juga.</p>
  <h5 style="margin-bottom:15px"><b>2. Mengusir Rasa Kesepian</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/1.2.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Menjalani isolasi dan kesepian, kenyataan yang kita jalani saat ini yang tentu dapat menyebabkan depresi.
  Merawat hewan dan bermain dengan mereka dapat membuat Anda merasa diinginkan. Mulai dari menyapa Anda di depan pintu hingga mengibaskan ekor saat menginginkan sesuatu dapat mengusir rasa kesepian secara cepat.</p>
  <h5 style="margin-bottom:15px"><b>3. Berinteraksi dengan Pemilik Hewan Lain</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/1.3.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Pemilik hewan peliharaan sering berbicara satu sama lain saat berjalan-jalan, ini membantu mereka tetap terhubung dan tidak terlalu menarik diri. Orang yang bersosialisasi dan bertemu orang baru cenderung lebih sehat.</p>
  <h5 style="margin-bottom:15px"><b>4. Buat Kita Menghargai Hal Kecil dalam Hidup</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/1.4.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Hewan peliharaan hidup di saat ini dan mengajari Anda untuk melakukan hal yang sama. Mereka membantumu menjadi lebih sadar dan menghargai hal kecil dalam hidup. Ini dapat membantu bagi mereka yang mengidap stres kronis atau kecemasan.</p>
  <h5 style="margin-bottom:15px"><b>5. Miliki Rutinitas</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/1.5.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Hewan peliharaan harus memiliki jadwal makan dan olahraga yang tepat, yang membantu mereka tetap tenang dan ini juga dapat membantumu.</p>
  <p>Memiliki hewan peliharaan membantu Anda tetap pada jadwal dan rutinitas yang tepat yang dapat membantu Anda menjaga perubahan suasana hati Anda.</p>
  <h5 style="margin-bottom:15px"><b>6. Membantu Menghilangkan Stres</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/1.6.jpg" alt="" style="height : 200px;margin-bottom:15px"   />
  <p style="margin-bottom:50px">Diyakini bahwa sentuhan dan gerakan adalah dua cara terbaik untuk mengelola stres. Mengelus anjing Anda, memeluknya di pangkuan Anda atau burung yang bernyanyi untuk Anda dapat membantu Anda merasa lebih tenang dan tidak terlalu stres.</p>
</div>
  
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

	<script>
  function tm_detail(id_produk) {
					$.getJSON("<?=base_url()?>Produk/get_detail_produk/"+id_produk,function(data){
          console.log(data);
          $("#id_produk").val(data['id_produk']);
          $("#nama_produk").val(data['nama_produk']);
					$("#harga_produk").val(data['harga_produk']);
          $("#stok").val(data['stok']);
          $("#gambar_produk").val(data['gambar_produk']);
          
                });
            }
</script>

  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  
	<script src="<?php echo base_url()?>assets/js/jquery-3.4.1.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>

  </body>
  </html>

