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
  <center><h2 style="margin-top:25px;margin-bottom:15px"><b>7 Bau yang Tidak Disukai Kucing dari Buah hingga Kotak Pasir yang Kotor </b></h2></center>
  <center><img src="<?php echo base_url()?>assets/images/artikel/4.jpg" alt="" style="height : 300px"  /></center>
  <br>
  <p>Kucing adalah salah satu hewan yang peka dan sensitif. Mereka bisa membedakan mana aroma ikan yang masih segar dan ikan yang telah busuk. Oleh karena itu, sebaiknya jangan memberikan ikan busuk sebagai makanan untuk kucing karena selain aromanya tak sedap juga bisa menimbulkan penyakit.</p>
  <p>Mereka cenderung tak menyukai sesuatu yang memiliki aroma menyengat. Jadi, bagi kamu yang memelihara kucing, wajib banget nih perhatikan beberapa hal berikut agar kucingmu tetap nyaman di rumah. Kira-kira bau apa saja ya yang tidak disukai oleh kucing? Yuk, simak ulasan berikut ini!</p>
  
  <h5 style="margin-bottom:15px"><b>1. Kucing memiliki indra penciuman yang cukup peka dan sensitif. Hewan gemas satu ini tak menyukai aroma menyengat dari ikan busuk</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/5.1.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Kucing adalah salah satu hewan yang peka dan sensitif. Mereka bisa membedakan mana aroma ikan yang masih segar dan ikan yang telah busuk. Oleh karena itu, sebaiknya jangan memberikan ikan busuk sebagai makanan untuk kucing karena selain aromanya tak sedap juga bisa  menimbulkan penyakit</p>
  <p>Bagi kamu yang memelihara kucing, sangat disarankan untuk segera membersihkan sisa-sisa makanan yang memiliki aroma menyengat karena bukan hanya kita yang tak nyaman, tetapi indra penciuman kucing juga dapat merasakannya. Jadi, sebisa mungkin rumah selalu dalam kondisi yang bersih dan wangi, ya!</p>

  <h5 style="margin-bottom:15px"><b>2. Mungkin bagi kita aroma sayuran akan menggugah selera, tapi ternyata para kucing tak menyukai bau cabai, bawang, dan tomat, lo</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/5.2.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Bahan-bahan seperti cabai, bawang, dan tomat seringkali menjadi bahan utama dalam pembuatan sambal. Aroma saat ketiga bahan tersebut diolah juga cukup menggugah selera makan kita. Ternyata, kucing nggak merasakan hal yang sama dengan kita, lo. Kucing justru sangat menghindari aroma dari ketiga bahan ini terutama cabai, karena aromanya sangat menyengat bagi indra penciumannya.</p>
  
  <h5 style="margin-bottom:15px"><b>3. Tak hanya tanaman sayur, kucing juga ternyata kurang menyukai aroma dari tanaman herbal seperti mint dan lavender</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/5.3.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Selain tak menyukai aroma dari beberapa sayuran, tanaman herbal juga menjadi salah satu bau yang tidak disukai kucing. Tanaman herbal yang kerap dihindari oleh kucing yaitu mint, lavender, bahkan kayu putih. Aroma yang kuat dari tanaman mint terlalu menyengat dan bisa membuat hidung kucing iritasi. Bahkan, kucing juga bisa mengalami diare dan muntah jika mengonsumsinya</p>
  <p>Sedangkan lavender merupakan aroma yang sering digunakan untuk membuat wewangian aromaterapi dan dapat meningkatkan kualitas tidur. Tetapi, sayangnya wewangian ini juga tak disukai oleh kucing karena termasuk beracun. Kucing yang menghirup aroma ini akan berpotensi mengalami mual, air liur berlebih, depresi, hingga timbulnya gejala dermatitis.</p>
  
  <h5 style="margin-bottom:15px"><b>4. Kucing juga tak menyukai bau dari beragam bumbu dapur karena biasanya cenderung memiliki aroma yang cukup menyengat</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/5.4.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Bumbu dapur biasanya digunakan untuk memperkaya cita rasa dari makanan. Beragam bumbu dapur yang biasa digunakan ketika memasak yaitu merica, ketumbar, hingga kayu manis. Ternyata, lagi-lagi aroma bumbu dapur merupakan bau yang tidak disukai kucing karena memiliki aroma yang terlalu menyengat dan dapat memengaruhi indra penciuman kucing.</p>
  
  <h5 style="margin-bottom:15px"><b>5. Buah pisang dan jeruk juga kurang disukai karena memiliki beberapa kandungan yang aromanya hanya bisa dikenali oleh kucing</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/5.5.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Kucing juga tak menyukai aroma dari buah pisang dan jeruk. Padahal, menurut kita sebagai manusia, pisang tak terlalu memiliki aroma yang menyengat. Tetapi, kucing bisa mengenali aroma kandungan kalium atau potasium yang terdapat di buah pisang, lo. Selain itu, kucing juga tak menyukai aroma asam dari buah jeruk dan sejenisnya karena sangat menyengat.</p>
  <p>Memiliki hewan peliharaan membantu Anda tetap pada jadwal dan rutinitas yang tepat yang dapat membantu Anda menjaga perubahan suasana hati Anda.</p>
  <p>Pemilik kucing sebaiknya menghindari kedua buah tersebut dan bagi yang ingin menjauhkan kucing dari area tertentu, kamu bisa letakkan kulit jeruk agar kucing tak mendekat</p>
  
  <h5 style="margin-bottom:15px"><b>6. Cairan pembersih rumah seperti detergen dan karbol juga tak disukai oleh kucing karena memiliki kandungan zat kimia yang cukup menyengat</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/5.6.jpg" alt="" style="height : 200px;margin-bottom:15px"   />
  <p>Bahan-bahan pembersih rumah seperti sabun, detergen, pewangi pakaian, pemutih, hingga pembersih lantai juga termasuk hal yang tak disukai oleh kucing. Bahan pembersih rumah tersebut umumnya mengandung zat kimia sehingga memiliki aroma yang menyengat. Oleh karena itu, sebaiknya sterilkan kucing di ruangan terpisah saat kamu membersihkan rumah dan pastikan aroma pembersih tak tertinggal saat kamu membersihkan kotak pasir dan alat makan kucing.</p>

  <h5 style="margin-bottom:15px"><b>7. Meski berisi kotorannya sendiri, kotak pasir yang kotor juga menjadi salah satu bau yang tidak disukai kucing</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/5.7.jpg" alt="" style="height : 200px;margin-bottom:15px"   />
  <p>Kotak pasir atau litter box merupakan wadah bagi kucing untuk membuang kotorannya. Biasanya, kotak tersebut diisi dengan pasir halus khusus untuk kucing. Bagi kamu yang memelihara kucing, pastikan kamu membersihkannya setiap hari dan rutin mengganti pasirnya, ya.</p>
  <p>Kucing ternyata juga tak menyukai aroma kurang sedap dari kotak pasir yang kotor, sehingga jika kotak pasir tak dibersihkan, kucing akan mencari tempat lain untuk membuang kotorannya.</p>
  <p style="margin-bottom:50px">Nah, itu dia deretan bau yang tidak disukai kucing karena aromanya terlalu menyengat untuk indra penciumannya. Bagi kamu yang memelihara kucing, beberapa hal ini bisa lebih diperhatikan agar kucingmu nyaman di rumah</p>
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

