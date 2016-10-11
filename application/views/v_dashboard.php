<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>5</h3>

              <p>Order Berhasil</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>100</h3>

              <p>Barang Terdaftar</p>
            </div>
            <div class="icon">
              <i class="ion ion-cube"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3> <?= $jumlahuser?></h3>

              <p>User Terdaftar</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url("usermanager")?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Welcome to Sistem Informasi Manajemen Gudang | Sekolah Informasi & Teknologi Hayati | Institut Teknologi Barang</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <p align="justify">SIMGU SITH ITB (Sistem Informasi Manajemen Gudang) merupakan sebuah sistem informasi berbasis website yang memiliki fungsi utama untuk manajemen gudang di SITH ITB sejak Desember 2016 .
            SIMGU ini dikembangkan oleh Alvaigan, Muhammad Rizaldi Putrama Henry, dan Renaldy Mardiansyah dari SMK Negeri 4 Bandung dengan dibimbing oleh Puji Subakti, ST pada saat PKL di SITH ITB</p>


          Dengan diterapkan SIMGU di SITH ITB ini, diharapakan dapat memberikan manfaat bagi pengguna sebagai berikut :
          <ol>
            <li>Penyampaian informasi lebih cepat </li>
            <li>Waktu mengakses dapat dilakukan kapanpun dan dimanapun </li>
            <li>Penumpukan berkas/kertas dapat dihindari </li>
            <li>Mempercepat pencarian riwayat transaksi </li>
            <li>Mengetahui status pemesanan barang </li>
            <li>Berkomunikasi Melalui pesan yang berbentuk keterangan</li>
            <li>Memesan barang yang belum tersedia</li>
          </ol>
        </div>
        <div class="box-footer">
          <div class="pull-right">
          Dibuat Oleh Alvaigan ,Muhammad Rizaldi Putrama Henry, dan Renaldy. Siswa PKL dari SMK Negeri 4 Bandung.
        </div>
        </div>
        <!-- /.box-body -->
      </div>
    </section>
    <!-- /.content -->
  </div>
