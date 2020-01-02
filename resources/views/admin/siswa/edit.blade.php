@extends('layouts.app')
@section('content')
<section class="content">
	<div class="row">
    <div class='col-md-12'>
  <div class='box box-info'>
  <div class='box-header with-border'>
  <h3 class='box-title'>Edit Data Siswa</h3>
  </div>
  <div class='box-body'>

  <div class='panel-body'>
  <ul id='myTabs' class='nav nav-tabs' role='tablist'>
  <li role='presentation' class='active'><a href='#siswa' id='siswa-tab' role='tab' data-toggle='tab' aria-controls='siswa' aria-expanded='true'>Data Siswa </a></li>
  <li role='presentation' class=''><a href='#ortu' role='tab' id='ortu-tab' data-toggle='tab' aria-controls='ortu' aria-expanded='false'>Data Orang Tua / Wali</a></li>
  </ul><br>

  <div id='myTabContent' class='tab-content'>
  <div role='tabpanel' class='tab-pane fade active in' id='siswa' aria-labelledby='siswa-tab'>
  <form action='{{ route('siswa.update') }}' method='POST' enctype='multipart/form-data' class='form-horizontal'>
    @csrf
  <div class='col-md-6'>
  <table class='table table-condensed table-bordered'>
  <tbody>
  <tr>
      <th width='130px' scope='row'>NIPD</th> 
      <td><input type='text' class='form-control' name='nipd' value="{{$data->nipd}}"></td>
  </tr>
  <tr>
      <th scope='row'>NISN</th>
      <td><input type='text' class='form-control' name='nisn' value="{{$data->nisn}}"></td>
  </tr>
  <tr>
      <th scope='row'>Nama Siswa</th>
      <td><input type='text' class='form-control' name='nama' value="{{$data->nama}}"></td>
    </tr>
  <tr>
      <th scope='row'>Kelas</th>
      <td><select class='form-control' name='kelas_id'> 
        @foreach ($kelas as $item)
        <option value="{{$item->id}}" @if($item->id == $data->kelas_id) selected @endif>{{$item->nama}}</option>
        @endforeach
        </select></td>
   </tr>
  <tr>
      <th scope='row'>Angkatan</th>
      <td><input type='text' class='form-control' name='angkatan' value="{{$data->angkatan}}"></td>
    </tr>

  <tr>
      <th scope='row'>Alamat Siswa</th>
      <td>
          <textarea name="alamat" class="form-control" cols="30" rows="4">{{$data->alamat}}</textarea>
        </td>
    </tr>
  <tr>
      <th scope='row'>Foto</th>
      <td>
          <input type='file' class='form-control' name='image'>
        </td>
    </tr>
  </tbody>
  </table>
  </div>
  <div class='col-md-6'>
  <table class='table table-condensed table-bordered'>
  <tbody>
  <tr>
      <th scope='row'>Tempat Lahir</th>
      <td><input type='text' class='form-control' name='tempat_lahir' value="{{$data->tempat_lahir}}"></td>
    </tr>
  <tr>
      <th scope='row'>Tanggal Lahir</th>
        <td><input type='text' class='form-control' id="datepicker" name='tgl_lahir' value="{{$data->tgl_lahir}}"></td>
    </tr>
  <tr><th scope='row'>Jenis Kelamin</th> <td><select class='form-control' name='jenis_kelamin'> 
    <option value="Laki-Laki" @if($data->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
    <option value="Perempuan" @if($data->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
</select></td></tr>
  <tr><th scope='row'>Agama</th> <td><select class='form-control' name='agama'> 
<option value="Islam" @if($data->agama == 'Islam') selected @endif>Islam</option>
<option value="Kristen" @if($data->agama == 'Kristen') selected @endif>Kristen</option>
<option value="Katolik" @if($data->agama == 'Katolik') selected @endif>Katolik</option>
<option value="Hindu" @if($data->agama == 'Hindu') selected @endif>Hindu</option>
<option value="Buddha" @if($data->agama == 'Buddha') selected @endif>Buddha</option>
</select></td></tr>

  <tr>
      <th scope='row'>No Telpon</th>
      <td><input type='text' class='form-control' name='telepon' value="{{$data->telepon}}"></td>
    </tr>
     <tr>
      <th scope='row'>Email</th>
      <td><input type='text' class='form-control' name='email' value="{{$data->email}}"></td>
    </tr>
<tr>
    <th scope='row'>Status Awal</th>
    <td><input type='radio' name='status_awal' {{ $data->status_awal == 'Baru' ? 'checked' : ''}} value='Baru'> Baru
  <input type='radio' name='status_awal' value='Pindahan'  {{ $data->status_awal == 'Pindahan' ? 'checked' : ''}}> Pindahan </td>
</tr>
  <tr><th scope='row'>Status Siswa</th> <td><input type='radio' name='status_siswa' value='Aktif' {{ $data->status_siswa == 'Aktif' ? 'checked' : ''}}> Aktif
  <input type='radio' name='status_siswa' value='Tidak Aktif' {{ $data->status_siswa == 'Tidak Aktif' ? 'checked' : ''}}> Tidak Aktif </td></tr>

  </tbody>
  </table>
  </div>  
  <div style='clear:both'></div>
  <div class='box-footer'>
      <input type="hidden" name="id" value="{{$data->id}}">
  <button type='submit' name='tambah' class='btn btn-info'>Update</button>
  <a href='{{ route('siswa') }}'><button type='button' class='btn btn-default'>Cancel</button></a>
  </div> 
  </div>

  <div role='tabpanel' class='tab-pane fade' id='ortu' aria-labelledby='ortu-tab'>
  <div class='col-md-12'>
  <table class='table table-condensed table-bordered'>
  <tbody>
  <tr bgcolor=#e3e3e3>
      <th width='130px' scope='row'>Nama Ayah</th>
      <td><input type='text' class='form-control' name='nama_ayah' value="{{$data->nama_ayah}}"></td>
    </tr>

  <tr>
      <th scope='row'>Pekerjaan</th>
      <td><input type='text' class='form-control' name='pekerjaan_ayah' value="{{$data->pekerjaan_ayah}}"></td>
    </tr>

  <tr>
      <th scope='row'>No Telpon</th>
      <td><input type='text' class='form-control' name='telp_ayah' value="{{$data->telp_ayah}}" ></td>
    </tr>
  <tr><th scope='row' coslpan='2'><br></th></tr>
  <tr bgcolor=#e3e3e3><th scope='row'>Nama Ibu</th> <td><input type='text' class='form-control' name='nama_ibu' value="{{$data->nama_ibu}}" ></td></tr>
  
  <tr><th scope='row'>Pekerjaan</th> <td><input type='text' class='form-control' name='pekerjaan_ibu' value="{{$data->pekerjaan_ibu}}" ></td></tr>

  <tr><th scope='row'>No Telpon</th> <td><input type='text' class='form-control' name='telp_ibu' value="{{$data->telp_ibu}}"></td></tr>
  <tr><th scope='row' coslpan='2'><br></th></tr>
  <tr bgcolor=#e3e3e3><th scope='row'>Nama Wali</th> <td><input type='text' class='form-control' name='nama_wali' value="{{$data->nama_wali}}"></td></tr>

  <tr><th scope='row'>Pekerjaan</th> <td><input type='text' class='form-control' name='pekerjaan_wali' value="{{$data->pekerjaan_wali}}"></td></tr>

  </tbody>
  </table>
  </div>
  <div class='box-footer'>
    <input type="hidden" name="id" value="{{$data->id}}">
  <button type='submit' name='tambah' class='btn btn-info'>Update</button>
  <a href='{{ route('siswa') }}'><button type='button' class='btn btn-default'>Cancel</button></a>
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