<aside class="main-sidebar" style="height:100%;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url("media")?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= @$username?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?= base_url("dashboard")?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

          </a>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i>
            <span>Master Data</span>
			<span class="pull-right-container">
              <i class="fa fa-angle-down pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url("/usermanager")?>"><i class="fa fa-circle-o"></i> Data User</a></li>
            <li><a href="<?= base_url("/Siswa")?>"><i class="fa fa-circle-o"></i> Data Barang</a></li>
            <li><a href="<?= base_url("/Siswa")?>"><i class="fa fa-circle-o"></i> Data Transaksi</a></li>
          </ul>
        </li>

    </section>
    <!-- /.sidebar -->
  </aside>
