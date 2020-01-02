 <section class="sidebar" id="nav">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{ route('admin-home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('sekolah') }}"><i class="fa fa-circle-o"></i> Data Sekolah</a></li>
            <li><a href="{{ route('kurikulum') }}"><i class="fa fa-circle-o"></i> Data Kurikulum</a></li>
            <li><a href="{{ route('akademik') }}"><i class="fa fa-circle-o"></i> Data Akademik</a></li>
            <li><a href="{{ route('kelas') }}"><i class="fa fa-circle-o"></i> Data Kelas</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Data Ruangan</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Data Users</span>
            <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('siswa') }}"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
             <li><a href="{{ route('guru') }}"><i class="fa fa-circle-o"></i> Data Guru</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Data Kepala Sekolah</a></li>
            <li><a href="{{ route('user') }}"><i class="fa fa-circle-o"></i> Data Users</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Data Akademik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('kelompok-pelajaran') }}"><i class="fa fa-circle-o"></i> Data Kelompok Pelajaran</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Data Mata Pelajaran</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Data Jadwal Pelajaran</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Data Bahan dan Tugas</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Data Kompetensi Dasar</a></li>
             <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Data Absensi Siswa</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Data Rentang Nilai</a></li>
          </ul>
        </li>
         <li><a href="#"><i class="fa fa-tags"></i><span>Journal KBM</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Laporan Nilai Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Data Capaian Belajar</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Data Extrakulikuler</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Data Prestasi</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Data Nilai Raport</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Cetak Raport Akhir</a></li>
          </ul>
        </li>
      </ul>
    </section>