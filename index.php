<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> -->
</head>
<body>
	<div class="container">
		<div class="alert alert-primary">Data Dosen</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>NIP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>

				<?php 
                require 'config.php';
                $no = 0;
                $query = mysqli_query($conn, "SELECT * FROM dosen");
                while ($row=mysqli_fetch_object($query))
                {
                    $no++;
				 ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $row->nip; ?></td>
					<td><?= $row->nama; ?></td>
					<td><?= $row->alamat; ?></td>
					<td>
						<a href="hapus.php?nip=<?= $row->nip; ?>" onclick="return confirm('Anda Yakin ing menghapus data ini')" class="btn btn-danger">Del</a>
						<a href="edit.php?nip=<?= $row->nip; ?>" class="btn btn-warning">Edit</a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>
