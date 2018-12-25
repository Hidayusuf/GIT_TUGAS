<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<?echo form_open('perpus'); ?>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Member - Pendaftaran</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(''); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(''); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(''); ?>assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Daftar Member</div>
        <div class="card-body">
        <?php echo form_open('perpus/register2'); ?>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" required="required" autofocus="autofocus">
                    <label for="nim">NIM<span class="required">*</span></label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required="required">
                    <label for="nama">Nama<span class="required">*</span></label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="Nomor HP" required="required">
                <label for="no_hp">Nomor HP<span class="required">*</span></label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
                    <label for="email">Email<span class="required">*</span></label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" required="required">
                    <label for="alamat">Alamat<span class="required">*</span></label>
                  </div>
                </div>
              </div>
            </div>
                  <div class="text-center">
                     <?php echo form_submit( 'submit', 'Register' , 'class = "btn btn-primary"'); ?>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>

     <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(''); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>
</html>