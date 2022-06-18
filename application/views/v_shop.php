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
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
            Petl<i class="fas fa-paw"></i>v
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('Home/index')?>">Home </a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="<?php echo base_url('Shop/index')?>"> Shop <span class="sr-only">(current)</span></a>
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
								
							<li class="nav-item">
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
  </div>

  <!-- product section -->

	<section class="products">
	<div class="container">
	<?php if($this->session->flashdata('pesan')!=null): ?>
						<div class= "alert alert-success alert-dismissible fade show" role="alert"><?= $this->session->flashdata('pesan');?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button></div>
					<?php endif?>
					<?php if($this->session->flashdata('gagal')!=null): ?>
						<div class= "alert alert-danger alert-dismissible fade show" role="alert"><?= $this->session->flashdata('gagal');?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button></div>
					<?php endif?>
					
	<h2>Temukan produk untuk hewan peliharaan anda </h2>
	<hr class="style1">
	

	<div class="row" style="margin-top:20px;">
        <?php foreach($produk as $isi):?>
        <div class="col-lg-4 col-md-6">
            <div class="card product-card">
            <img src="<?php echo base_url('uploads/products/'.$isi->gambar_produk);?>" alt="..." class="card-img-top" style="height: 220px; object-fit: cover">
                <div class="card-body" >
                    <h1 class="card-title"><?php echo $isi->nama_produk ?></h1>
                    <p class="card-text">
						Harga : <?php echo "Rp. ".number_format($isi->harga_produk)?> <br>
                        Stok  : <?php echo $isi->stok?>
                    </p>
                </div>
                <div class="card-footer">
				<?php if($this->session->userdata('logged_in') == TRUE){?>
                    	<a href="#modalbeli" onclick="tm_detail('<?php echo ($isi->id_produk)?>')" data-toggle="modal" class="btn btn-beli"> <i class="fas fa-cart-plus"></i></a> 
				<?php } 
 					else { 
				?>
					<a href="<?php echo base_url('Login/index')?>" class="btn btn-beli"> <i class="fas fa-cart-plus"></i></a>
				<?php } 
				?>
					</div>
            </div>
        </div>
            <?php endforeach; ?>
    </div>

	<div class="modal fade" id="modalbeli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Add to cart</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form action="<?php echo base_url('Shop/add_to_cart')?>" method="post">
			<div class="modal-body">
			  <input type="hidden" class="form-control" name="id_produk" id="id_produk">
				<input type="hidden" class="form-control" name="harga_produk" id="harga_produk">
				<input type="hidden" class="form-control" name="id_petshop" id="id_petshop">
				Jumlah: <input type="number" value="0" class="form-control" min="1" id="qty" name="qty"> <br>
				Rp. <input type="text"  min="1" id="total" readonly name="total_harga" style="border:none;">	
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Tambah keranjang">
			</div>
		</div>
		</form>
	</div>
	</div>


	</section>

  <!-- end product section -->

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
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>

<script>
	$("#qty").change(function () {
   		$("#total").val($(this).val() * $('#harga_produk').val());
		});

(function () {
  'use strict'

  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation')

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  }, false)
}())
</script>

<script>
  function tm_detail(id_produk) {
		$.getJSON("<?=base_url()?>Produk/get_detail_produk/"+id_produk,function(data){
          console.log(data);
          $("#id_produk").val(data['id_produk']);
          $("#nama_produk").val(data['nama_produk']);
		 		  $("#harga_produk").val(data['harga_produk']);
					$("#id_petshop").val(data['id_petshop']);
          $("#stok").val(data['stok']);
          $("#gambar_produk").val(data['gambar_produk']);
          
                });
            }

	$('#modalbeli').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
})
</script>

