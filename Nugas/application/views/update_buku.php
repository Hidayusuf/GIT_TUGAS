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
			<?php echo form_open('perpus/update_buku') ?>
			  

			   <div class="form-group">
			    <label for="text">Judul</label>
			    <input type="text" name="judul" value="<?php echo $buku->judul ?>" class="form-control" placeholder="Masukkan Judul">
			  </div>


			  <div class="form-group">
			    <label for="text">Pengarang</label>
			    <input type="text" name="pengarang" value="<?php echo $buku->pengarang ?>" class="form-control" placeholder="Masukkan Pengarang">
			  </div>

			  <div class="form-group">
			    <label for="text">Penerbit</label>
			    <input type="text" name="penerbit" value="<?php echo $buku->penerbit ?>" class="form-control" placeholder="Masukkan Penerbit">
			  </div>

			  <div class="form-group">
			    <label for="text">Stok</label>
			    <input type="text" name="stok" value="<?php echo $buku->stok ?>" class="form-control" placeholder="Masukkan Stok">
			  </div>

			  <div class="form-group">
			    <label for="text">Tahun Terbit</label>
			    <input type="text" name="th_terbit" value="<?php echo $buku->th_terbit ?>" class="form-control" placeholder="Masukkan Tahun Terbit" >
			  </div>

			  <div class="form-group">
			    <label for="text">ID Kategori</label>
			    <input type="text" name="id_kategori" value="<?php echo $buku->id_kategori ?>" class="form-control" placeholder="Masukkan ID Kategori" >
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