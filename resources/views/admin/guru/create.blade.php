@extends('layouts.app')
@section('content')
<section class="content">
  <div class="row">
    <div class='col-md-8'>
      <div class='box box-info'>
        <div class='box-header with-border'>
          <h3 class='box-title'>Tambah Data Guru</h3>
        </div>
        <div class='box-body'>

          <form method='POST' class='form-horizontal' action="{{ route('guru.store') }}" enctype='multipart/form-data'>
            @csrf
            <div class='col-md-8'>
              <table class='table table-condensed table-bordered'>
                <tbody>
                  <tr>
                      <th width='120px' scope='row'>Nip</th>
                      <td><input type='text' class='form-control' name='nip' placeholder="Nomor Induk Pegawai"></td>
                    </tr>
                  <tr><th scope='row'>Password</th><td><input type='password' class='form-control' name='passowrd' placeholder="Password"></td></tr>
                  <tr><th scope='row'>Nama Lengkap</th><td><input type='text' class='form-control' name='nama' placeholder="Nama Lengkap"></td></tr>
                  <tr><th scope='row'>Tempat Lahir</th><td><input type='text' class='form-control' name='tempat_lahir' placeholder="Tempat Lahir"></td></tr>
                  <tr><th scope='row'>Tanggal Lahir</th><td><input type='text' class='form-control' id="datepicker" name='tgl_lahir' placeholder="Tanggal Lahir"></td></tr>
                  <tr><th scope='row'>Jenis Kelamin</th><td><select class='form-control' name='jenis_kelamin'> 
                    <option value='0' selected>- Pilih Jenis Kelamin -</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select></td></tr>
                  <tr><th scope='row'>Agama</th><td><select class='form-control' name='agama'> 
                    <option value='0' selected>- Pilih Agama -</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                  </select></td></tr>

                  <tr><th scope='row'>No Telpon</th><td><input type='text' class='form-control' name='telepon' placeholder="Nomor HP/Telepon"></td></tr>
                  <tr><th scope='row'>Alamat Email</th><td><input type='text' class='form-control' name='email' placeholder="Email"></td></tr>
                  <tr><th scope='row'>Alamat</th><td><textarea name='alamat' class='form-control' placeholder="Alamat Lengkap" rows="4"></textarea></td></tr>
                  <tr><th scope='row'>Jabatan</th><td><input type='text' class='form-control' name='jabatan' placeholder="Jabatan"></td></tr>
                  <tr><th scope='row'>Foto</th><td><input type='file' class='form-control' name='image'></td></tr>
                </tbody>
              </table>
            </div>

            <div style='clear:both'></div>
            <div class='box-footer'>
              <button type='submit' class='btn btn-info'>Tambahkan</button>
              <a href="{{ route('guru') }}"><button type='button' class='btn btn-danger'>Cancel</button></a>
            </div> 
          </div>
        </form>
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