<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ;?>assets/css/bootstrap.min.css" >
		
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Halaman Lokasi</h1>
		<div class="container">
			
		

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



		<table class="table table-hover">
			<thead>
				<tr>
					<th>Nama Perusahaan</th>
					<th>Nama Lokasi</th>
					<th>Tanggal Berdiri</th>
				</tr>
			</thead>
			<tbody>

				<?php foreach ($lokasi as $key) { ?>
									<tr>
										
										<td><?php echo $key->namaPerusahaan; ?></td>
										<td><?php echo $key->namaLokasi; ?></td>
										<td><?php $date = new DateTime($key->tanggalBerdiri); echo $date->format('d-m-Y'); ?></td>
										<!-- <td><a class="btn btn-success" href="<?php echo site_url(); ?>/produk/index/ <?php echo $key->id; ?>">Produk</a>
										<a class="btn btn-danger" href="<?php echo site_url(); ?>/lokasi/index/ <?php echo $key->id; ?>">Lokasi</a></td> -->
									</tr>
								<?php } ?>
								


			</tbody>
		</table>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ;?>assets/js/bootstrap.min.js" ></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
 		</div>
	</body>
</html>