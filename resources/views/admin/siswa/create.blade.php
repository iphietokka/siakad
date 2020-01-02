@extends('layouts.app')
@section('content')
<section class="content">
	<div class="row">
    <div class='col-md-12'>
  <div class='box box-info'>
  <div class='box-header with-border'>
  <h3 class='box-title'>Tambah Data Siswa</h3>
  </div>
  <div class='box-body'>

  <div class='panel-body'>
  <ul id='myTabs' class='nav nav-tabs' role='tablist'>
  <li role='presentation' class='active'><a href='#siswa' id='siswa-tab' role='tab' data-toggle='tab' aria-controls='siswa' aria-expanded='true'>Data Siswa </a></li>
  <li role='presentation' class=''><a href='#ortu' role='tab' id='ortu-tab' data-toggle='tab' aria-controls='ortu' aria-expanded='false'>Data Orang Tua / Wali</a></li>
  </ul><br>

  <div id='myTabContent' class='tab-content'>
  <div role='tabpanel' class='tab-pane fade active in' id='siswa' aria-labelledby='siswa-tab'>
  <form action='{{ route('siswa.store') }}' method='POST' enctype='multipart/form-data' class='form-horizontal'>
    @csrf
  <div class='col-md-6'>
  <table class='table table-condensed table-bordered'>
  <tbody>
  <tr><th width='130px' scope='row'>NIPD</th> <td><input type='text' class='form-control' name='nipd' placeholder="NIPD"></td></tr>
  <tr><th scope='row'>NISN</th> <td><input type='text' class='form-control' name='nisn' placeholder="NISN"></td></tr>
  <tr><th scope='row'>Password</th> <td><input type='password' class='form-control' name='password' placeholder="Password"></td></tr>
  <tr><th scope='row'>Nama Siswa</th> <td><input type='text' class='form-control' name='nama' placeholder="Nama Siswa"></td></tr>
  <tr><th scope='row'>Kelas</th> <td><select class='form-control' name='kelas_id'> 
  <option value='0' selected>- Pilih Kelas -</option> 
  @foreach ($kelas as $item)
      <option value="{{$item->id}}">{{$item->nama}}</option>
  @endforeach
 
  </select></td></tr>
  <tr><th scope='row'>Angkatan</th> <td><input type='text' class='form-control' name='angkatan'></td></tr>

  <tr><th scope='row'>Alamat Siswa</th> <td><textarea name="alamat" class="form-control" cols="30" rows="4"></textarea></td></tr>

  <tr><th scope='row'>Foto</th><td><input type='file' class='form-control' name='image'>
  </td></tr>
  </tbody>
  </table>
  </div>
  <div class='col-md-6'>
  <table class='table table-condensed table-bordered'>
  <tbody>
  
  <tr><th scope='row'>Tempat Lahir</th> <td><input type='text' class='form-control' name='tempat_lahir'></td></tr>
  <tr><th scope='row'>Tanggal Lahir</th> <td><input type='text' class='form-control' id="datepicker" name='tgl_lahir'></td></tr>
  <tr><th scope='row'>Jenis Kelamin</th> <td><select class='form-control' name='jenis_kelamin'> 
  <option value='0' selected>- Pilih Jenis Kelamin -</option>
    <option value="Laki-Laki">Laki-Laki</option>
    <option value="Perempuan">Perempuan</option>
</select></td></tr>
  <tr><th scope='row'>Agama</th> <td><select class='form-control' name='agama'> 
  <option value='0' selected>- Pilih Agama -</option>
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Katolik">Katolik</option>
<option value="Hindu">Hindu</option>
<option value="Buddha">Buddha</option>
</select></td></tr>

  <tr><th scope='row'>No Telpon</th> <td><input type='text' class='form-control' name='telepon'></td></tr>
   <tr><th scope='row'>Email</th> <td><input type='text' class='form-control' name='email'></td></tr>
<tr><th scope='row'>Status Awal</th> <td><input type='radio' name='status_awal' value='Baru' checked> Baru
  <input type='radio' name='status_awal' value='Pindahan'> Pindahan </td></tr>
  <tr><th scope='row'>Status Siswa</th> <td><input type='radio' name='status_siswa' value='Aktif' checked> Aktif
  <input type='radio' name='status_siswa' value='Tidak Aktif'> Tidak Aktif </td></tr>

  </tbody>
  </table>
  </div>  
  <div style='clear:both'></div>
  <div class='box-footer'>
  <button type='submit' name='tambah' class='btn btn-info'>Tambahkan</button>
  <a href=''><button type='button' class='btn btn-default'>Cancel</button></a>
  </div> 
  </div>

  <div role='tabpanel' class='tab-pane fade' id='ortu' aria-labelledby='ortu-tab'>
  <div class='col-md-12'>
  <table class='table table-condensed table-bordered'>
  <tbody>
  <tr bgcolor=#e3e3e3><th width='130px' scope='row'>Nama Ayah</th> <td><input type='text' class='form-control' name='nama_ayah'></td></tr>

  <tr><th scope='row'>Pekerjaan</th> <td><input type='text' class='form-control' name='pekerjaan_ayah'></td></tr>

  <tr><th scope='row'>No Telpon</th> <td><input type='text' class='form-control' name='telp_ayah'></td></tr>
  <tr><th scope='row' coslpan='2'><br></th></tr>
  <tr bgcolor=#e3e3e3><th scope='row'>Nama Ibu</th> <td><input type='text' class='form-control' name='nama_ibu'></td></tr>
  
  <tr><th scope='row'>Pekerjaan</th> <td><input type='text' class='form-control' name='pekerjaan_ibu'></td></tr>

  <tr><th scope='row'>No Telpon</th> <td><input type='text' class='form-control' name='telp_ibu'></td></tr>
  <tr><th scope='row' coslpan='2'><br></th></tr>
  <tr bgcolor=#e3e3e3><th scope='row'>Nama Wali</th> <td><input type='text' class='form-control' name='nama_wali'></td></tr>

  <tr><th scope='row'>Pekerjaan</th> <td><input type='text' class='form-control' name='pekerjaan_wali'></td></tr>

  </tbody>
  </table>
  </div>
  <div class='box-footer'>
  <button type='submit' name='tambah' class='btn btn-info'>Tambahkan</button>
  <a href=''><button type='button' class='btn btn-default'>Cancel</button></a>
  </div>
  </form>
  </div>
  </div>
  </div>

  </div>
  </div>
  </div>
    </div>
</section>
@endsection
@section('scripts')
    <script>
 $('#datepicker').datepicker({
     autoclose: true,
  format: 'yyyy-mm-dd'
   });
</script>
@endsection