@extends('layouts.app')
@section('content')
<section class="content">
<div class='col-md-12'>
  <div class='box box-info'>
  <div class='box-header with-border'>
  <h3 class='box-title'>Detail Data Siswa</h3>
  </div>
  <div class='box-body'>
    <div class='panel-body'>
  <ul id='myTabs' class='nav nav-tabs' role='tablist'>
  <li role='presentation' class='active'><a href='#siswa' id='siswa-tab' role='tab' data-toggle='tab' aria-controls='siswa' aria-expanded='true'>Data Siswa </a></li>
  <li role='presentation' class=''><a href='#ortu' role='tab' id='ortu-tab' data-toggle='tab' aria-controls='ortu' aria-expanded='false'>Data Orang Tua / Wali</a></li>
  </ul><br>

  <div id='myTabContent' class='tab-content'>
  <div role='tabpanel' class='tab-pane fade active in' id='siswa' aria-labelledby='siswa-tab'>
  <form class='form-horizontal'>
  <div class='col-md-7'>
  <table class='table table-condensed table-bordered'>
  <tbody>
  <tr><th style='background-color:#E7EAEC' width='160px' rowspan='17'>
   <img class='img-thumbnail' style='width:155px' src="{{$data->image!='' && File::exists('image/siswa/'.$data->image)?'/image/siswa/'.$data->image:'/image/no-image.jpg'}}">
 <a href='{{ route('siswa.edit', $data->id) }}' class='btn btn-success btn-block'>Edit Profile</a>
  </th>
  </tr>
  <tr><th width='120px' scope='row'>NIPD</th> <td>{{$data->nipd}}</td></tr>
  <tr><th scope='row'>NISN</th> <td>{{$data->nisn}}</td></tr>
  <tr><th scope='row'>Nama Siswa</th> <td>{{$data->nama}}</td></tr>
  <tr><th scope='row'>Kelas</th> <td>{{$data->kelas->nama}}</td></tr>
  <tr><th scope='row'>Angkatan</th> <td>{{$data->angkatan}}</td></tr>
  <tr><th scope='row'>Alamat Siswa</th> <td>{{$data->alamat}}</td></tr>
  <tr><th scope='row'>Status Siswa</th> <td>{{$data->status_siswa}}</td></tr>
  </tbody>
  </table>
  </div>
  <div class='col-md-5'>
  <table class='table table-condensed table-bordered'>
  <tbody>
  <tr><th scope='row'>Tempat Lahir</th> <td>{{$data->tempat_lahir}}</td></tr>
  <tr><th scope='row'>Tanggal Lahir</th> <td>{{$data->tgl_lahir}}</td></tr>
  <tr><th scope='row'>Jenis Kelamin</th> <td>{{$data->jenis_kelamin}}</td></tr>
  <tr><th scope='row'>Agama</th> <td>{{$data->agama}}</td></tr>
  <tr><th scope='row'>No Telpon</th> <td>{{$data->telepon}}</td></tr>
  <tr><th scope='row'>Alamat Email</th> <td>{{$data->email}}</td></tr>
  </tbody>
  </table>
  </div>   
  </form>
  </div>
  <div role='tabpanel' class='tab-pane fade' id='ortu' aria-labelledby='ortu-tab'>
  <form class='form-horizontal'>
  <div class='col-md-12'>
  <table class='table table-condensed table-bordered'>
  <tbody>
  <tr bgcolor=#e3e3e3><th width='120px' scope='row'>Nama Ayah</th> <td>{{$data->nama_ayah}}</td></tr>

  <tr><th scope='row'>Pekerjaan</th> <td>{{$data->pekerjaan_ayah}}</td></tr>

  <tr><th scope='row'>No Telpon</th> <td>{{$data->telp_ayah}}</td></tr>
  <tr><th scope='row' coslpan='2'><br></th></tr>
  <tr bgcolor=#e3e3e3><th scope='row'>Nama Ibu</th> <td>{{$data->nama_ibu}}</td></tr>

  <tr><th scope='row'>Pekerjaan</th> <td>{{$data->pekerjaan_ibu}}</td></tr>

  <tr><th scope='row'>No Telpon</th> <td>{{$data->telp_ibu}}</td></tr>
  <tr><th scope='row' coslpan='2'><br></th></tr>
  <tr bgcolor=#e3e3e3><th scope='row'>Nama Wali</th> <td>{{$data->nama_wali}}</td></tr>

  <tr><th scope='row'>Pekerjaan</th> <td>{{$data->pekerjaan_wali}}</td></tr>

  </tbody>
  </table>
  </div>
  </form>
  </div>

  </div>
  </div>

  </div>
  </div>
</div>
</section>
  @endsection