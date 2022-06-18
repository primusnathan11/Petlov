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

  <title> 17 Hewan Peliharaan yang Mudah Dirawat di Rumah </title>

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
								<a class="nav-link" href="<?php echo base_url('Shop/index')?>">Pesanan Anda</a>
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
  <h2 style="text-align : center; margin-top:25px;margin-bottom:15px"><b>17 Hewan Peliharaan yang Mudah Dirawat di Rumah</b></h2>
  <center><img src="<?php echo base_url()?>assets/images/artikel/2.1.jpeg" alt="" style="height : 300px"  /></center>
  <br>
  <p>Anda kesepian di rumah dan ingin memiliki hewan peliharaan? Ada banyak sekali hewan yang dapat Anda pelihara dengan mudah di rumah dan dapat menemani aktivitas sehari-hari. Tentu, mereka akan membuat Anda merasa lebih bahagia dan menghangatkan suasana rumah.</p>
  <h5 style="margin-bottom:15px"><b>Anjing</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/1.2.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Hewan peliharaan pertama yang dapat Anda pelihara di rumah adalah anjing. Anjing adalah hewan yang penyayang dan setia kepada tuannya. Selain bisa menjadi teman bermain, anjing juga dapat membantu menjaga rumah,loh. Biasanya, saat ada orang asing, dia akan langsung menggonggong. Anda dapat memilih anjing pomeranian, poodle, golden, pug, dan beberapa jenis anjing kecil lainnya Namun, anjing juga butuh perhatian, loh. Jadi saat memeliharanya, jangan lupa untuk sering mengajaknya bermain, jalan-jalan, dan tentunya merawatnya dengan baik agar mereka tidak stres dan sakit.</p>
  <h5 style="margin-bottom:15px"><b>Kucing</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.2.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Jika Anda ingin memiliki hewan peliharaan, tetapi tidak dapat menghabiskan banyak waktu dengan peliharaan, Anda bisa memelihara kucing. Kucing adalah hewan yang tenang dan cenderung lebih suka menyendiri. Anda dapat memilih beberapa jenis kucing, seperti anggora, persia, british shorthair, dan lain-lain. Walaupun begitu, kamu tetap harus merawatnya dengan baik dan memberinya asupan gizi yang cukup ya.</p>
  <h5 style="margin-bottom:15px"><b>Hamster</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.3.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Anda tidak mempunyai tempat yang luas tapi ingin memiliki hewan di rumah? Hamster akan jadi solusinya. Hewan satu ini memiliki ukuran yang kecil sehingga Anda dapat leluasa meletakkan kandangnya di mana saja.  Namun, saat memelihara hamster, lebih baik tidak langsung membelinya dalam jumlah yang banyak karena hewan ini sulit bergaul. Selain itu, segera pisahkan hamster ketika mereka terlihat berkelahi.</p>
  <h5 style="margin-bottom:15px"><b>Landak Mini</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.4.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Anda takut jika memelihara landak? Jangan khawatir, Ruppers! Landak mini yang menggemaskan ini berbeda dengan landak berukuran besar. Hewan ini lebih bersahabat dan mudah untuk merawatnya. Tetapi, Anda tetap harus berhati-hati saat memegangnya agar tidak tertusuk duri-duri kecilnya. </p>
  <h5 style="margin-bottom:15px"><b>Ikan Cupang</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.5.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Pastinya Anda sudah tidak asing dengan hewan yang sedang jadi tren akhir-akhir ini? Ya, ikan cupang! Ikan ini memiliki tubuh yang sangat cantik dengan bermacam warna. Cara merawatnya pun mudah. Selain itu, Anda dapat memeliharanya untuk mempercantik rumah, lho</p>
  <h5 style="margin-bottom:15px"><b>Kura - Kura</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.6.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Jika Anda tertarik memelihara kura-kura, pilihlah jenis kura-kura yang tidak dilindungi, seperti kura-kura Brazil ya, Ruppers. Merawat hewan ini tidak tergolong mudah karena Anda hanya perlu memberikan makan sayuran, cacing, buah, pelet, dan serangga. Selain itu, Anda perlu menjaga kualitas airnya.</p>
  <h5 style="margin-bottom:15px"><b>Ikan Mas Koki</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.7.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Anda dapat dengan mudah merawat ikan koki ini di akuarium kecil dan tidak memerlukan banyak perawatan khusus. Namun, hal yang paling penting adalah rutin membersihkan akuarium karena kotoran yang ada akan membuat air asam dan membuat ikan cepat mati.</p>
  <h5 style="margin-bottom:15px"><b>Burung Love Bird</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.8.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Burung dengan warna yang sangat cantik ini juga dapat kamu rawat dengan mudah di rumah. Love Bird memiliki ukuran tubuh yang kecil sehingga kamu dapat meletakkannya di kandang yang kecil. Kamu juga harus sering-sering melatihnya agar dapat memiliki kicauan yang indah. </p>
  <h5 style="margin-bottom:15px"><b>Kelinci</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.9.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Berbeda dengan kucing dan anjing, Anda memerlukan kandang untuk merawat kelinci agar tidak kabur kemana-mana. Namun, Anda dapat mengeluarkannya sesekali untuk bermain. Namun, jangan lupa untuk kembali memasukkannya ke kandang ya.</p>
  <h5 style="margin-bottom:15px"><b>Burung Kakatua</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.10.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Kakatua adalah salah satu burung yang memiliki tampilan menawan dan megah sehingga akan cocok untuk kamu rawat di rumah. Anda dapat melatihnya untuk mengikuti suara yang Anda ucapkan. Merawat burung kakatua cukup mudah dan makanannya pun juga sangat bervariatif.</p>
  <h5 style="margin-bottom:15px"><b>Sugar Glider</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.11.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Termasuk salah satu hewan peliharaan yang unik, sugar glider dapat melebarkan tubuhnya sendiri dan memiliki kemampuan untuk melayang cukup jauh. Sugar glider adalah hewan yang menyukai makanan manis seperti buah. Anda tidak perlu repot membersihkannya karena sugar glider selalu menjaga kebersihan tubuhnya sendiri.</p>
  <h5 style="margin-bottom:15px"><b>Guinea Pig</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.12.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Hewan peliharaan satu ini juga mudah untuk Anda rawat dirumah. Namun, Anda harus memastikan kandangnya selalu bersih karena hewan ini mudah sakit jika kandang dan tempat makanannya kotor.</p>
  <h5 style="margin-bottom:15px"><b>Iguana</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.13.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Walaupun terlihat ganas, ternyata iguana merupakan hewan yang bersahabat, loh. Anda dapat memilih iguana berwarna hijau karena lebih jinak dan mudah beradaptasi. Iguana biasanya menyukai serangga, ulat bulu, sayuran dan biji-bijian. Selain itu, Anda harus memastikan kandang iguana memiliki sirkulasi udara yang baik. Anda pun perlu membersihkan kandang setidaknya satu minggu sekali</p>
  <h5 style="margin-bottom:15px"><b>Gecko</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.14.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Hewan satu ini merupakan reptil sejenis tokek, tetapi gecko memiliki warna atau motif yang lebih menarik. Gecko merupakan hewan yang tidak berbahaya karena jarang menggigit. Ukuran gecko sendiri tidak terlalu besar, yakni hanya sekitar 15-20 cm. Perawatannya juga mudah, yang paling penting adalah Anda harus menjaga kebersihan kandangnya.</p>
  <h5 style="margin-bottom:15px"><b>Sea Monkey</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.15.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Dikenal juga dengan monyet laut, sea monkey sebenarnya udang air asin buatan dan tidak ada kaitannya dengan monyet. Sea monkey biasa dijual dalam wujud kering dan dapat Anda pelihara di dalam akuarium. Perawatannya pun cukup mudah karena sea monkey mampu hidup hingga 2 tahun dan juga dapat mati suri saat kondisi lingkungannya sedang tidak baik.</p>
  <h5 style="margin-bottom:15px"><b>Otter</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.16.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Otter dapat menjadi hewan pilihan yang mudah untuk Anda rawat di rumah. Hewan yang dikenal dengan sebutan berang-berang ini pandai berenang dan suka makan ikan. Otter memiliki karakteristik yang manja sehingga banyak yang suka memeliharanya. Namun, bila Anda ingin memelihara hewan ini, pastikan untuk menyediakan kolam sebagai tempatnya bermain atau berenang. Otter juga suka tempat yang sejuk. Jadi,  jangan biarkan otter kepanasan karena mereka bisa stres.</p>
  <h5 style="margin-bottom:15px"><b>Ular</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/2.17.jpeg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p style="margin-bottom:50px">Yang terakhir, Anda dapat merawat ular di rumah. Pilih ular yang tidak berbisa dan menempatkannya di dalam kandang. Selain itu, jangan sampai ular kamu terlepas ya, Ruppers, karena akan menakuti orang lain. Walaupun perawatannya mudah, Anda juga harus memikirkan biaya perawatannya karena cenderung lebih mahal.</p>
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

