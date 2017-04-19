<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ;?>assets/css/bootstrap.min.css" >
		<link rel="stylesheet" href="<?php echo base_url('') ;?>assets/datatables.min.css" >
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style type="text/css">
			img{
				width: 250px;
				height:150px;


			}
		</style>
	</head>
	<body>
		<h1 class="text-center">Halaman Perusahaan</h1>
		<div class="container-fluid">
			
		<a class="btn btn-primary" href="<?php echo site_url()?>/perusahaan/create/  " role="button">Create</a>

		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Title</a></li>
						<li><a href="#">Data Perusahaan</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

<a class="btn btn-info" href="<?php echo site_url()?>/produk/index/" role="button">Produksi</a>
<a class="btn btn-info" href="<?php echo site_url()?>/lokasi/index/" role="button">Lokasi</a>
					
				<!-- 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
						
					
		<!-- <table class="table table-hover">
			<thead>
				<tr>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Id</td>
					<td>Nama Perusahaan</td>
					<td>Nomor Ijin Produksi</td>
					<td>Tanggal Berdiri</td>
					<td>Action</td>
				</tr>
			</tbody>
			<?php foreach ($perusahaan as $key) { ?>
									<tr>
										<td><?php echo $key->id; ?></td>
										<td><?php echo $key->namaPerusahaan; ?></td>
										<td><?php echo $key->nomorIjinProduksi; ?></td>
										<td><?php echo $key->tanggalBerdiri; ?></td>
										

										</tr>
										</table>
										<?php } ?> -->

												
		<!-- jQuery -->

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<table class="table table-striped table-hover" id="example">
								<thead>
									<tr>
										<th>Id</th>
										<th>Nama Perusahaan</th>
										<th>Nomor ijin produksi</th>
										<th>Tanggal berdiri</th>
										<th>Foto</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($perusahaan as $key) { ?>
									<tr>
										<td><?php echo $key['id']; ?></td>
										<td><?php echo $key['namaPerusahaan']; ?></td>
										<td><?php echo $key['nomorIjinProduksi']; ?></td>
										<td><?php $date = new DateTime($key['tanggalBerdiri']); echo $date->format('d-m-Y'); ?></td>
										<td><img src="<?php echo base_url(''); ?>/assets/uploads/<?php echo $key['foto']; ?>"></td>
										<td><a class="btn btn-primary " href="<?php echo site_url('produk/index/').$key['id']; ?>" role="button">Produksi</a>
										
										<a class="btn btn-primary" href="<?php echo site_url('lokasi/index/').$key['id']?>" role="button">Lokasi</a>
										<!-- <a href="<?php echo site_url('jabatan/index/').$key->id ?>" type="button" class="btn btn-info">Jabatan</a> -->
										<a class="btn btn-primary" href="<?php echo site_url('perusahaan/update/').$key['id']?> " role="button">Update</a>


<a class="btn btn-primary" href="<?php echo site_url('perusahaan/delete/').$key['id']?> " role="button">Delete</a>
<!-- <td><a class="btn btn-success" href="<?php echo site_url(); ?>/produk/index/<?php echo $key->id; ?>">Produk</a> -->

										</td>
										</tr> <?php } ?>



										<!-- <a class="btn btn-success" href="<?php echo site_url(); ?>/produk/index/<?php echo $key->id; ?>">Produk</a> -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ;?>assets/js/bootstrap.min.js" ></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="<?php echo base_url('') ;?>assets/datatables.min.js" ></script>
 		</div></div>
 		<script type="text/javascript">
 			$(document).ready(function(){
 				$('#example').DataTable();
		});
 		</script>
	</body>
</html>