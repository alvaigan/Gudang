<style>
.bg {
  background: url('<?= base_url("media");?>/img/bg-itb.jpg') no-repeat center center;
  -webkit-background-size :cover;
  position: fixed;
  width: 100%;
  height: 100%; /*same height as jumbotron */
  top:0;
  left:0;
  z-index: -1;
}
</style>
<div class="bg"></div>
<div class="container">
  <div class="col-lg-12">
    <div class="jumbotron " style="margin-top:10px;">
      <h1 style="display:none" id="div1">Welcome to SIDANG - SITH</h2>
        <p style="display:none" id="div2">
          SIDANG atau Sistem Gudang adalah pengimplementasian Sistem Manajemen Inventaris berbasis Online yang menggunakan Platform Website Responsive.
          <br>
          Kelebihan dari SIDANG yaitu :
        </p>
            <div class="container" style="display:none" id="div41">
              <div class="col-lg-6">
                <ul class="list-group">
                  <li class="list-group-item">Pengajuan permintaan barang lebih mudah<span class="glyphicon glyphicon-ok pull-right" style="color:green;"></span></li>
                  <li class="list-group-item">Waktu mengakses dapat dilakukan kapanpun dan dimanapun<span class="glyphicon glyphicon-ok pull-right" style="color:green;"></span></li>
                  <li class="list-group-item">Notifikasi ketika barang sudah dapat diambil<span class="glyphicon glyphicon-ok pull-right" style="color:green;"></span></li>
                </ul>
              </div>

              <div class="col-lg-6" >
                <ul class="list-group">
                  <li class="list-group-item">Mengetahui status pemesanan barang<span class="glyphicon glyphicon-ok pull-right" style="color:green;"></span></li>
                  <li class="list-group-item">Mempercepat pencarian riwayat transaksi<span class="glyphicon glyphicon-ok pull-right" style="color:green;"></span></li>
                  <li class="list-group-item">Memesan barang yang belum tersedia<span class="glyphicon glyphicon-ok pull-right" style="color:green;"></span></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12 text-center">
                <a align="center" href="#" id="div5" class="btn btn-info launch-modal" data-modal-id="modal-login">SIGN IN</a>
            </div>
    </div>
  </div>
</div>

<!-- MODAL -->
        <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">

        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-login-label">Login to SIMGU</h3>
        				<p>Masukan Username dan Password untuk masuk ke dalam SIMGU</p>
        			</div>

        			<div class="modal-body">

	                    <form role="form" action="<?= base_url("Home/do_login")?>" method="post" class="login-form">
	                    	<div class="form-group">
                          <div class="input-group">
                            <label class="sr-only" for="form-username">Username</label>
                              <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="username">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          </div>
                          </div>
	                        <div class="form-group">
                            <div class="input-group">
                              <label class="sr-only" for="form-password">Password</label>
  	                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
                              <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i></span>
                            </div>
	                        </div>
                          <center>
                            Tekan Enter untuk login
	                           <!-- <button type="submit" class="btn btn-sm btn-success">OK</button> -->
                          </center>
	                    </form>
        			</div>

        		</div>
        	</div>
        </div>
</body>
        <!-- Javascript -->
        <script>
        $("input").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("form").submit();
    }
});
        </script>
