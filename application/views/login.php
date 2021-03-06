<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Siswa | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?=base_url()?>aset/dist/img/logo.png">
  <link rel="stylesheet" href="<?=base_url()?>aset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>aset/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>aset/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>aset/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>aset/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style media="screen">
  body {
    overflow: hidden;
  }
</style>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="<?=base_url()?>aset/dist/img/grf2.png" alt="" width="200px" height="70px">
  </div>
  <div class="login-box-body">
    <?php
    if($this->session->flashdata('pesan')!=null) {
    echo "<div class='alert alert-success'>".$this->session->flashdata('pesan')."</div>";
    }
    ?>
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?=base_url('index.php/website/proses_login')?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-block btn-flat" value="MASUK" name="login">
        </div>
      </div>
    </form>
    <a href="<?=base_url('index.php/website/register')?>">Belum Punya Akun? Daftar</a>

  </div>
</div>
<script src="<?=base_url()?>aset/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>aset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>aset/plugins/iCheck/icheck.min.js"></script>
</body>
</html>
