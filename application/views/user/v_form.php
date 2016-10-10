<?php
	if (@$form_edit) {
		$title = "Edit Data User";

		$url = "usermanager/do_edit/" . $result->ID_Akun;
		$hintpw = "(Untuk mengganti, silahkan isi, jika tidak kosongkan saja)";
	}
	else {
		$title = "Tambah Data User";

		$url = "usermanager/do_add/";
		$hintpw = "Password";
	}
?>
 <div class="content-wrapper">
	<section class="content-header">
		<h1><?= $title?></h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Master Data</a></li>
			<li class="active">Data User</li>
			<li><?= $title?></li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="box box-primary">
				<form action="<?= site_url($url)?>" method="POST">
					<div class="box-body">
						<div class="form-group">
							<label for="Username">Username</label>
							<input type="text" required name="Username" class="form-control" id="Username" placeholder="Username" value="<?= @$result->Username?>">
						</div>

						<div class="form-group">
							<label for="Password">Password</label>
							<input type="password" name="Password" class="form-control" id="Password" placeholder="<?= $hintpw; ?>" >
						</div>

						<div class="form-group">
							<label for="Nama">Nama</label>
							<input type="text" required name="Nama" class="form-control" id="Nama" placeholder="Nama" value="<?= @$result->Nama?>">
						</div>

						<div class="form-group">
							<label for="Level">Level</label>
							<?php
								$dropdown = array(
									"1"=>"Administrator",
									"2"=>"Sarana Prasarana",
									"3"=>"Staff Sarana Prasarana",
									"4"=>"Dekanat",
 	 								"5"=>"Pengguna",
								);
								echo form_dropdown("Level", $dropdown, @$result->Level, 'class="form-control" id="Level"');
							?>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
				</form>
			</div>
		</div>
	</section>
</div>
