<style>
.unselectable {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
		cursor:not-allowed;
}
</style>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Data User<small>Sekolah Ilmu dan Teknologi Hayati</small></h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Data User</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-lg-12">
				<div class="box box-primary">
					<div class="box-header">
						<!--feedback-->
						<?php if(!empty($success)) { ?>
							<div class="alert alert-success">
									<?php echo $success ?>
							</div>
						<?php } ?>

						<?php if(!empty($error)) { ?>
						<div class="alert alert-danger">
								<?php echo $error ?>
						</div>
						<?php } ?>
						<!--End feedback-->

						<h3 class="box-title">
							<a href="<?= site_url("usermanager/tambah")?>" class="btn btn-primary">
								<i class="fa fa-plus"></i> Tambah User
							</a>
						</h3>
					</div>
					<div class="box-body" style="overflow-x: scroll!important;">
						<table class="table table-responsive table-bordered table-stripped table-hover">
							<thead>
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Username</th>
									<th class="text-center">Password</th>
									<th class="text-center">Nama</th>
									<th class="text-center">Level</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>

							<tbody>
								<?php
									$i = 0;
									foreach($result as $row) { ?>
								<tr>
									<td class="text-center" style="vertical-align:middle;"><?= $i+=1;?></td>
									<td class="text-center" style="vertical-align:middle;"><?= $row->Username?></td>
									<td class="text-center unselectable" style="vertical-align:middle;"><?= $row->Password?></td>
									<td class="text-center" style="vertical-align:middle;"><?= $row->Nama?></td>
									<?php switch($row->Level) {
										case 1:
										$levels = "Administrator";
										break;
										case 2:
										$levels = "Sarana Prasarana";
										break;
										case 3:
										$levels = "Staff Sarana Prasarana";
										break;
										case 4:
										$levels = "Dekanat";
										break;
										case 5:
										$levels = "Pengguna";
										break;
										default:
										break;
									}
									?>
									<td class="text-center" style="vertical-align:middle;"><?= $levels?></td>
									<td align="center">
                    <div class="btn-group-vertical">
                      <a class="btn btn-primary" href="<?= site_url("usermanager/edit/" . $row->ID_Akun)?>">
  											<i class="fa fa-pencil"></i>Edit
  										</a>
  											<a class="btn btn-danger" href="<?= site_url("usermanager/delete/" . $row->ID_Akun)?>">
  												<i class="fa fa-trash"></i>Delete
  											</a>
                    </div>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
