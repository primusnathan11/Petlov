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
  <center><h2 style="margin-top:25px;margin-bottom:15px" class="text-center;"><b>7 Cara Merawat Kucing Persia agar Sehat, Bebas Kutu, dan Lebat Bulunya </b></h2></center>
  <center><img src="<?php echo base_url()?>assets/images/artikel2/4.png" alt="" style="height : 300px"  /></center>
  <br>
  <p>Kucing dikenal populer menjadi hewan peliharaan karena wajahnya yang lucu dan tingkahnya yang menggemaskan, termasuk di antaranya kucing persia. Kucing jenis persia ini memiliki ciri khas berupa bulunya yang lebat dibandingkan dengan kucing lain. Semakin menggemaskan karena kucing ini umumnya gemuk, tambun, dan besar. Bentuk hidungnya juga lebih pesek dan berwajah bulat.</p>
  <p>Kucing persia juga memiliki beberapa jenis khusus, ada yang peaknose, medium, himalaya, dan lain sebagainya. Namun secara garis besar mereka memiliki beberapa kesamaan sikap yang membuat kucing persia semakin diminati sebagai hewan peliharaan. Kucing persia dikenal manja, lembut, dan tenang. Selain itu mereka juga termasuk kucing yang penuh kasih sayang dan mudah beradaptasi di lingkungan baru.</p>
  <p>Nampak menggemaskan dan cocok menjadi peliharaan, namun tidak memungkiri bahwa kucing persia juga memerlukan perawatan khusus. Berikut ini cara merawat kucing persia agar sehat, bebas kutu, dan berbulu lebat.</p>

  <h5 style="margin-bottom:15px"><b>1. Kebersihan adalah nomor satu, pastikan sediakan kandang yang selalu bersih</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/4.1.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Baik cara merawat kucing persia himalaya hingga kucing persia medium, kandang yang bersih merupakan kebutuhan wajib. Intinya segala jenis kucing memerlukan kandang yang bersih dan nyaman agar kucing tetap sehat dan tidak stres. Pastikan bersihkan kandang secara rutin termasuk membersihkan sisa-sisa makanan yang berjatuhan.</p>
  <p>Tempatkan kandang di ruangan agak terbuka, agar sirkulasi udara dalam kandang juga lancar dan sinar matahari juga tetap bisa masuk. Kandang kotor dan tidak terawat bisa menjadi sarang penyakit, terlebih lagi kucing persia lebih mudah terkena penyakit daripada kucing kampung (domestik short hair).</p>

  <h5 style="margin-bottom:15px"><b>2. Sediakan tempat pasir khusus untuk buang air kucing persia, rutin dibersihkan ya!</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/4.2.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Memelihara kucing persia, maka perlu menyiapkan bak pasir yang bermanfaat sebagai tempat untuk kucing dapat melakukan defekasi (poop) dan urinasi. Pasir berfungsi sebagai media untuk mengurangi bau dan mengeringkan kotoran kucing. Pilihlah pasir kucing yang nyaman untuk kucing dan mudah dibersihkan, seperti pasir jenis zeolit.</p>
  <p>Selain itu, pemilik juga mesti melakukan toilet training agar kucing bisa buang air di bak pasir yang sudah disediakan. Anak kucing biasanya sudah bisa melakukan toilet training pada minggu ke empat. Hal ini berbeda dari cara merawat kucing persia yang baru lahir, mereka perlu dibantu untuk membersihkan diri dan kotorannya.</p>
  
  <h5 style="margin-bottom:15px"><b>3. Sediakan tempat makan dan minum khusus, karena lidah kucing persia yang cenderung pendek, maka pastikan tempat makannya nggak terlalu cekung</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/4.3.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Pastikan pilih tempat makan yang nggak terlalu cekung karena lidah kucing yang tidak begitu panjang. Taruh tempat makan di posisi yang sama agar kucing bisa mengenal di mana ia bisa mencari makanannya. Memberikan tempat makan khusus kucing merupakan salah satu dasar dari cara memelihara kucing persia bagi pemula. Selain itu, kucing akan bisa makan tanpa berantakan atau tercecer ke mana-mana.</p>
  
  <h5 style="margin-bottom:15px"><b>4. Berikan makanan sehat dan bergizi pada kucing, sesekali berikan minyak ikan agar bulu kucing persia tetap lebat</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/4.4.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Hewan peliharaan hidup di saat ini dan mengajari Anda untuk melakukan hal yang sama. Mereka membantumu menjadi lebih sadar dan menghargai hal kecil dalam hidup. Ini dapat membantu bagi mereka yang mengidap stres kronis atau kecemasan.</p>
  
  <h5 style="margin-bottom:15px"><b>5. Rawat kucing persia dengan rutin memandikannya menggunakan sampo khusus dan sisir bulunya setiap hari agar tidak menggumpal</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/4.5.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Gunakan sampo khusus untuk kucing yang memiliki khasiat anti kutu. Setelah mandi, jangan lupa keringkan dan sisir bulu kucing. Menyisir bulu kucing persia dianjurkan dilakukan setiap hari untuk menghindari bulu yang bisa saja menggumpal dan membuat kucing terlihat dekil.</p>
  
  <h5 style="margin-bottom:15px"><b>6. Bantu bersihkan bagian-bagian tubuh yang sulit dijangkau</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/4.6.jpg" alt="" style="height : 200px;margin-bottom:15px"  />
  <p>Merawat kebersihan kucing perlu dilakukan secara rutin, termasuk pula bagian-bagian yang sulit dijangkau seperti telinga, gigi, mata, dan kuku. Bagian telinga dan mulut ini sangat sulit dijangkau kucing dan mengakibatkan bau tidak enak pada kucing. Makanya, menjaga bagian tersebut tetap bersih merupakan cara merawat kucing persia agar tidak bau. Bersihkan telinga menggunakan cotton bud dengan hati-hati, gigi kucing dapat dibersihkan dengan cara menggosok gigi menggunakan sikat gigi berbulu lembut dan pasta khusus kucing.</p>
  <p>Mata kucing juga harus dibersihkan secara teratur terutama kucing dengan hidung pesek atau peaknose.Cara merawat kucing persia peaknose di bagian mata adalah dengan membersihkannya dengan kapas basah secara lembut. Terakhir, jangan lupakan kuku kucing persia yang perlu dibersihkan dan dipotong secara teratur.</p>

  <h5 style="margin-bottom:15px"><b>7. Berikan vaksin secara berkala agar kucing terlindungi dari virus dan penyakit, minimal usia kucing persia 6-8 minggu</b></h5>
  <img src="<?php echo base_url()?>assets/images/artikel/4.7.jpg" alt="" style="height : 200px;margin-bottom:15px"   />
  <p>Tak kalah penting, vaksin pada kucing bisa membentuk daya tahan tubuh agar kucing menjadi lebih kuat dan kebal beberapa penyakit. Pemberian vaksin ini termasuk ke dalam cara merawat kucing persia umur 2 atau 3 bulan. Hal tersebut dikarenakan vaksin akan tidak efektif bila diberikan di usia yang terlalu kecil.</p>
  <p>Pada usia sekitar 3 bulan, kucing harus mendapatkan vaksinasi ulangan agar sistem kekebalan tubuh mereka menjadi lebih optimal. Setelah tahapan yang kedua, kucing memerlukan vaksinasi ulang secara rutin setiap tahun.</p>
  <p style="margin-bottom:50px">Nah, itu tadi cara merawat kucing persia agar tetap sehat, berbulu lebat dan pastinya bebas kutu. Walaupun terkadang ribet, kita harus merawat mereka dengan baik sebagai bentuk tanggung jawab dan kasih sayang </p>
  
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

