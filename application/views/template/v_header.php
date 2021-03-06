<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gudang - SITH</title>
    <!-- Supaya Responsive terhadap lebar layar -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?= base_url("media")?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url("media")?>/plugins/font-awesome/css/font-awesome.min.css">
    <!-- AdminLTE css -->
    <link rel="stylesheet" href="<?= base_url("media");?>/dist/css/AdminLTE.min.css">
    <!-- form-element.css-->
    <link rel="stylesheet" href="<?= base_url("media");?>/css/form-elements.css">
    <!--- style css --->
    <link rel="stylesheet" href="<?= base_url("media");?>/css/style.css">
    <!---Sweetalert css & JS --->
    <link rel="stylesheet" type="text/css" href="<?= base_url("media")?>/dist/sweetalert.css">
    <script src="<?= base_url("media")?>/dist/sweetalert.min.js"></script>
    <!--- Inisialisasi Animasi --->


    <!--- JavaScript --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?= base_url("media");?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url("media");?>/js/jquery.backstretch.min.js"></script>
    <script src="<?= base_url("media");?>/js/scripts.js"></script>

    <script>
$(document).ready(function(){
        $("#div1").fadeIn(1000);
        $("#div2").fadeIn(2000);
        $("#div3").fadeIn(3500);
        $("#div41").fadeIn(4000);
        $("#div5").fadeIn(5000);
});
</script>

  </head>
  <body>
    <!-- Navbar Atas -->

        <div class="navbar navbar-default" style="text-align:center;color:red;background-color:#00c0ef;border-color:#00c0ef;">
          <a class="navbar-brand" href="<?= base_url();?>" style="float:none;display:inline-block;color:#fff;">Institut Teknologi Bandung</a>
        </div>

        <div class="container-fluid" style="align-items:center;display:flex;background-color:#0055AA;margin-top:-20px;padding:15px;">
            <div class="col-lg-1 col-lg-offset-1">
              <img src="<?= base_url("media");?>/img/logo-itb.png" >
          </div>
          <div class="col-lg-5" style="color:white;margin-left:-13px;margin-top:-20px">
            <h3 style="margin-left:15px;">SIDANG - SITH</h3>
            <div class="col-lg-12">
              Sistem Gudang
              <br>Sekolah Ilmu Dan Teknologi Hayati
            </div>
          </div>
        </div>
        <?php if(!empty($error)) { ?>
        <script type="text/javascript">
          swal("Login Failed!", "Username atau Password salah!", "warning");
        </script>
        <?php } ?>
