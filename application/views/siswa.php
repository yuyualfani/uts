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
		
<style type="text/css">
	img{
width:250px;
height:150;
	}
</style>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Halaman Siswa</h1>



<div class="table-responsive">
	<table class="table table-hover"  id="">
	
		<thead>
			<tr>
				<th>Id</th>
				<th>Nama</th>
				<th>Tanggal Lahir</th>
				<th>Foto</th>
				<th>Aciton</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($siswa as $key ) {?>
	
			<tr>
				<td><?php echo $key->id; ?></td>
				<td><?php echo $key->nama; ?></td>
				<td><?php echo $key->tanggal_lahir?></td>
				<td><img src="<?php echo base_url(''); ?>/assets/uploads/<?php echo $key->foto; ?>"></td>
				
				<td><a class="btn btn-primary " href="<?php echo site_url('sisw/update/').$key->id; ?>" role="button">Update</a><a class="btn btn-primary " href="<?php echo site_url('sisw/create/').$key->id; ?>" role="button">Crete</a>
			<a class="btn btn-primary " href="<?php echo site_url('sisw/delete/').$key->id; ?>" role="button">Delete</a></td>


	<?php } ?>
			</tr>
		</tbody>
	</table>
</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ;?>assets/js/bootstrap.min.js" ></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="<?php echo base_url('') ;?>assets/datatables.min.js" ></script>

 		<script type="text/javascript">
 			$(document).ready(function(){
 				$('#example').DataTable();
		});
 		</script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>