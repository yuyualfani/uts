<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('')?>assets/css/bootstrap.min.css">
			<link rel="stylesheet" href="<?php echo base_url('')?>assets/datatables.min.css">
		


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Halaman Kelas</h1>
<div class="container">
	


<table class="table table-hover" id="example">
	<thead>
	<a class="btn btn-primary " href="<?php echo site_url('Kelas/create/') ?>" role="button">Create</a>
		<tr>
			<th>Id</th>
			<th>Nama Kelas </th>
			<th>Siswa</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($kelas as $key) { ?>
	
	<tr>
	
			<td><?php echo $key->id?></td>
			<td><?php echo $key->nama?></td>
		

			<td><a class="btn btn-primary " href="<?php echo site_url('sisw/index/').$key->id; ?>" role="button">Siswa</a></td>
			<td>
			<a class="btn btn-primary " href="<?php echo site_url('Kelas/update/').$key->id; ?>" role="button">Update</a>
			<a class="btn btn-primary " href="<?php echo site_url('Kelas/delete/').$key->id; ?>" role="button">Delete</a>


			





			</td>
		</tr>
		<?php }?>
	</tbody>
</table>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('')?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url('')?>assets/datatables.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>

 		<script type="text/javascript">
 			$(document).ready(function(){
 				$('#example').DataTable();
		});
 		</script>
	</body></div>
</html>