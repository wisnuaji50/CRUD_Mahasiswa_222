<?php
 require 'config.php';

    $nip1 = $_GET['nip'];
    if(isset($_POST['submit'])){
        $nip = htmlspecialchars($_POST['nip']);
        $nama = htmlspecialchars($_POST['nama']);
        $alamat = htmlspecialchars($_POST['alamat']);

        $query = mysqli_query($conn, "UPDATE dosen SET nip='$nip', nama='$nama', alamat='$alamat' WHERE nip = '$nip1'");

        header('location: index.php');
    }
    if(!empty($_GET['nip'])){
    $syntax = mysqli_query($conn, "SELECT * FROM dosen WHERE nip = '{$_GET['nip']}'");
    
    $row = mysqli_fetch_object($syntax);
    
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> -->
</head>
<body>
<div class="alert alert-info">Daftar Dosen</div>
<form method="post" action="">
  <div class="form-group">
    <label for="exampleFormControlInput1">NIP</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="nip" value="<?= $row->nip; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?= $row->nama; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Alamat</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="alamat" value="<?= $row->alamat; ?>">
  </div>
  <div class="form-group">
  <button type="submit" name="submit" class="btn btn-primary">OK</button>
  </div>
</form>

	</div>

</body>
</html>