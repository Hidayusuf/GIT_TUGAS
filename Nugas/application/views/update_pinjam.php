<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<div class="col-md-12">
			<?php echo form_open('perpus/update_pinjam') ?>
			  

			   <div class="form-group">
			    <label for="text">ID Anggota</label>
			    <input type="text" name="id_anggota" value="<?php echo $pinjam->id_anggota ?>" class="form-control" placeholder="Masukkan ID Anggota">
			  </div>


			  <div class="form-group">
			    <label for="text">Kode Buku</label>
			    <input type="text" name="kd_buku" value="<?php echo $pinjam->kd_buku ?>" class="form-control" placeholder="Masukkan Kode Buku">
			  </div>

			  <div class="form-group">
			    <label for="date">Tanggal Pinjam</label>
			    <input type="date" name="tanggal_pinjam" value="<?php echo $pinjam->tanggal_pinjam ?>" class="form-control" placeholder="Masukkan Tanggal Pinjam">
			  </div>

			  <div class="form-group">
			    <label for="date">Tanggal Kembali</label>
			    <input type="date" name="tanggal_kembali" value="<?php echo $pinjam->tanggal_kembali ?>" class="form-control" placeholder="Masukkan Tanggal Kembali">
			  </div>

			  <div class="form-group">
			    <label for="text">Jumlah Pinjam</label>
			    <input type="text" name="jml_pinjam" value="<?php echo $pinjam->jml_pinjam ?>" class="form-control" placeholder="Masukkan Jumlah Pinjam" >
			  </div>

			  <div class="form-group">
			    <label for="text">Denda</label>
			    <input type="text" name="denda" value="<?php echo $pinjam->denda ?>" class="form-control" placeholder="Masukkan Denda" >
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Update</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>
			<?php echo form_close() ?>
		</div>
	</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>