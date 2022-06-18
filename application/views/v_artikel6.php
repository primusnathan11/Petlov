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
  <center><h2 style="margin-top:25px;margin-bottom:15px"><b>5 Cara memelihara dan merawat sugar glider</b></h2></center>
  <center><img src="<?php echo base_url()?>assets/images/artikel2/7.png" alt="" style="height : 300px"  /></center>
  <br>
  <p>Selain kucing dan anjing, ada beberapa hewan eksotik yang sering dijadikan sebagai binatang peliharaan. Salah satunya adalah sugar glider. Hewan yang masuk jenis posum ini memiliki ukuran yang kecil dengan penampilan yang lucu dan menggemaskan. Tak heran bila banyak yang tertarik menjadikan hewan kecil ini sebagai binatang peliharaan.</p>
  <p>Namun, ada beberapa hal yang harus kamu perhatikan sebelum memutuskan untuk memelihara sugar glider. Salah satunya adalah memahami beberapa tips atau cara merawat sugar glider yang benar. Berikut beberapa di antaranya.</p>
  
  <h5 style="margin-bottom:15px"><b>1. Mengenal dan memahami karakteristik sugar glider</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel2/6.1.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Step satu ini menjadi langkah penting bagi kamu yang berniat untuk memelihara sugar glider. Pengetahuan yang cukup soal sugar glider akan membuatmu mudah dalam memelihara serta membesarkan hewan mungil ini.</p>
  <p>Kamu bisa mencari beragam informasi seputar sugar glider di internet, mulai dari perawatan rutin, makanan, perilaku, dan kebutuhan apa saja yang diperlukan. Step ini juga bisa menjadi satu pertimbangan apakah kamu memang mampu merawat sugar glider atau tidak.</p>
  
  <h5 style="margin-bottom:15px"><b>2. Siapkan kandang yang tepat dan nyaman</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel2/6.2.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Sugar glider tentu membutuhkan tempat tinggal yang nyaman. Belilah atau buat sendiri kandang sugar glider dengan ukuran yang sesuai dan tidak terlalu kecil. Pilih kandang yang terbuat dari jeruji dengan ukuran yang cukup tinggi agar sugar glider leluasa memanjat dan meluncur di udara.</p>
  <p>Pastikan juga kandang selalu bersih. Hindari menaruh kandang sugar glider di tempat yang terpapar sinar matahari atau berdekatan dengan kandang hewan peliharaan lain seperti anjing atau kucing untuk mencegah mereka menjadi stress.</p>
  
  <h5 style="margin-bottom:15px"><b>3. Rutin periksakan sugar glider ke dokter hewan</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel2/6.3.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Sama seperti hewan peliharaan lain, sugar glider juga berpotensi untuk sakit. Penyakit yang bisa diidap hewan kecil ini juga beragam, seperti stress, kekurangan kalsium, gangguan pencernaan, obesitas, hingga terkena parasit seperti kutu.</p>
  <p>Untuk itulah penting untuk memeriksakan kondisi sugar glider ke dokter spesialis hewan. Akan jauh lebih baik lagi bila dokter yang kamu datangi memang spesialisasi dan ahli menangani hewan eksotis seperti sugar glider.</p>
  
  <h5 style="margin-bottom:15px"><b>4. Pilih makanan yang tepat agar sugar glider tetap sehat</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel2/6.4.png" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Pemilihan makanan untuk sugar glider tidak boleh sembarangan. Sebagai hewan omnivora, sugar glider memang bisa makan apa saja. Namun, perlu diingat untuk tetap menjaga nutrisi makanan agar peliharaanmu tetap sehat. Di alam bebas, hewan ini memakan getah pohon, nektar, buah-buahan, dan serangga.</p>
  <p>Sebaiknya hindari memberi makan sugar glider menggunakan makanan anjing atau kucing karena perbedaan nutrisi yang tidak diperuntukkan untuk hewan ini. Jangan pula memberikan sugar glider gula, permen, atau cokelat karena berbahaya bagi kesehatannya. Terakhir, sediakan pula air sebagai sumber mineral agar sugar glider tidak dehidrasi.</p>
  
  <h5 style="margin-bottom:15px"><b>6. Berkonsultasi dengan pemilik sugar glider lainnya</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel2/6.5.jpg" alt="" style="height : 200px;margin-bottom:15px"   />
  <p>Cobalah untuk bergabung pada komunitas pecinta sugar glider. Bersosialisasi dengan sesama penyuka hewan ini bisa membuatmu lebih mudah untuk meminta saran, pendapat, atau pertanyaan mengenai sugar glider. Mereka yang sudah berpengalaman pasti bisa membantu saat kamu memiliki masalah selama memelihara sugar glider.</p>
  <p style="margin-bottom:50px">Itulah beberapa cara merawat sugar glider yang harus kamu perhatikan. Jadi bagaimana? Masih tetap tertarik memelihara hewan kecil menggemaskan ini?</p>
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

