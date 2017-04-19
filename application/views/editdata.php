<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('')?>/assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		



					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php echo form_open_multipart('perusahaan/update/'.$this->uri->segment(3));?>
						<legend>Edit Data</legend>
						
						<?php echo validation_errors();?>
						
						
<div class="form-group">
									<label for="">Nama</label>
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Input field" value="<?php echo $perusahaan[0]->namaPerusahaan; ?>">
								</div>

<div class="form-group">
									<label for="">Nomor Perusahaan</label>
									<input type="text" class="form-control" id="nomor" name="nomor" placeholder="Input field" value ="<?php echo $perusahaan[0]->nomorIjinProduksi; ?>">





								</div>

<div class="form-group">

								<label for="Foto">Foto</label>
				<input type="file" class="form-control" id="Foto" name="Foto" placeholder="Foto"></div>

								<button type="submit" class="btn btn-sm btn-info">Submit
								</button>
								<?php echo form_close();?>


								
								
					</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>