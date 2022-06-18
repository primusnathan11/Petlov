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

	<!-- data table -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sl-1.3.1/datatables.min.css"/>


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
						<li class="nav-item active">
								<a class="nav-link" href="<?php echo base_url('Home/home_admin')?>">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('Home/administrasi')?>">Admin</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('Home/verifikasi_dokter')?>"> Verifikasi Dokter</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('Shop/transaksi_admin_page')?>"> Verifikasi Pembayaran</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> Artikel</a>
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
    <!-- end header section -->
  </div>

	<div class="container">
  <!-- cart section -->
  	<hr class="style1">
 	<h2>Produk Anda </h2>
	<hr class="style1">
	
  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    	Tambahkan admin
  	</button>
	<section class="cart">
	<table class="table table-hover" id="transaksi_admin" style="width:100%;">
			    <thead>
					<tr> 
                        <th>No</th>
						<th>ID Admin</th>
						<th>Nama</th>
						<th>No. Telp</th>
                        <th>Email</th>
                        <th>Alamat</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
        <?php $no=1; ?>
				<?php 
                foreach ($data_admin as $isi) : ?>
				<tr>
					<td>
						<?= $no++ ?>
					</td>
				
					<td>
						<?php echo $isi->id_admin ?>
					</td>
				
					<td>
						<?php echo $isi->nama_admin ?>
					</td>

					<td>
						<?php echo $isi->telp_admin?>
					</td>

                    <td>
						<?php echo $isi->email_admin ?>
					</td>

					<td>
						<?php echo $isi->alamat_admin ?>
					</td>
					<td>
                    <div class="btn-group">
                    <a href="#edit_admin" data-toggle="modal" onclick="tm_detail('<?php echo ($isi->id_admin)?>')" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                    <a id="" href="<?php echo base_url().'Login/hapus_admin/'.$isi->id_admin ?>" onclick="return confirm('Anda yakin akan menghapus <?php echo $isi->nama_admin?> dari database?');" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </div>
                    </td>

				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</section>
  <!-- end cart section -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
		<div class="modal-content">
		
			<!-- Modal Header -->
			<div class="modal-header">
			<h4 class="modal-title">Tambahkan Produk</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<!-- Modal body -->
			<div class="modal-body">
					<form action="<?php echo base_url()?>Login/daftar_admin" method="post" enctype="multipart/form-data">
							<p>
							<label for="">Nama Admin</label>
							<input type="text" placeholder="Nama Admin" class="form-control" name="nama_admin">
							</p>

							<p>
							<label for="">No Telp</label>
							<input type="text" name="telp_admin" class="form-control" required>
							</p>

							<p>
							<label for="">Email</label>
							<input type="email" name="email_admin" class="form-control" min="0" required >
							</p>

							<p>
							<label for="">Password</label>
							<input type="password" name="pass_admin" class="form-control" required>
							</p>

							<p>
							<label for="">Alamat</label>
							<input type="text" name="alamat_admin" class="form-control" required>
							</p>
							
							<br>
			</div>
			
			<!-- Modal footer -->
			<div class="modal-footer">
						<input type="submit" class="btn btn-block btn-primary" value="Tambahkan">
						</form>	
			</div>
			
		</div>
		</div>
	</div>

	<div class="modal fade" id="edit_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
					<form action="<?php echo base_url()?>Login/edit_admin" method="post" enctype="multipart/form-data">
							<p>
							<input type="hidden" name="id_admin" id="id_admin">
							<label for="">Nama Admin</label>
							<input type="text" placeholder="Nama Admin" class="form-control" name="nama_admin" id="nama_admin">
							</p>

							<p>
							<label for="">No Telp</label>
							<input type="text" name="telp_admin" class="form-control" id="telp_admin">
							</p>

							<p>
							<label for="">Email</label>
							<input type="email" name="email_admin" class="form-control" min="0" id="email_admin">
							</p>

							<p>
							<label for="">Password</label>
							<input type="password" name="pass_admin" class="form-control" id="pass_admin">
							</p>

							<p>
							<label for="">Alamat</label>
							<input type="text" name="alamat_admin" class="form-control" id="alamat_admin">
							</p>
							
							<br>
			</div>
			
			<!-- Modal footer -->
			<div class="modal-footer">
						<input type="submit" class="btn btn-block btn-primary" value="Edit">
						</form>	
			</div>
		</div>
	</div>
	</div>
  
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
					<a href="<?php echo base_url('Home/home_dokter')?>">Petlov<br><br></a>
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

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sl-1.3.1/datatables.min.js"></script>
    

	<!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
	
	<script>
	$(document).ready(function() {
    $('#transaksi_admin').DataTable();
	} );

  function tm_detail(id_admin) {
		$.getJSON("<?=base_url()?>Login/get_detail_admin/"+id_admin,function(data){
          console.log(data);
			$("#id_admin").val(data['id_admin']);
			$("#nama_admin").val(data['nama_admin']);
			$("#telp_admin").val(data['telp_admin']);
			$("#email_admin").val(data['email_admin']);
			$("#pass_admin").val(data['pass_admin']);
			$("#alamat_admin").val(data['alamat_admin']);
                });
            }

	
	</script>
</body>

</html>


