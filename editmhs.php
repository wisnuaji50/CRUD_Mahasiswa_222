<?php
 require 'config.php';

    $nim1 = $_GET['nim'];
    if(isset($_POST['submit'])){
        $nim = htmlspecialchars($_POST['nim']);
        $nama = htmlspecialchars($_POST['nama']);
        $prodi = htmlspecialchars($_POST['prodi']);

        $query = mysqli_query($conn, "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi' WHERE nim = '$nim1'");

        header('location: mhs.php');
    }
    if(!empty($_GET['nim'])){
    $syntax = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '{$_GET['nim']}'");
    
    $row = mysqli_fetch_object($syntax);
    
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Data mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> -->
</head>
<body>
<div class="alert alert-info">Daftar mahasiswa</div>
<form method="post" action="">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nim</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="nim" value="<?= $row->nim; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?= $row->nama; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">prodi</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="prodi" value="<?= $row->prodi; ?>">
  </div>
  <div class="form-group">
  <button type="submit" name="submit" class="btn btn-primary">OK</button>
  </div>
</form>

	</div>

</body>
</html>