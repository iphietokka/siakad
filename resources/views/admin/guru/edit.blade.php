@extends('layouts.app')
@section('content')
<section class="content">
  <div class="row">
    <div class='col-md-8'>
      <div class='box box-info'>
        <div class='box-header with-border'>
          <h3 class='box-title'>Edit Data Guru</h3>
        </div>
        <div class='box-body'>

          <form method='POST' class='form-horizontal' action="{{ route('guru.update') }}" enctype='multipart/form-data'>
            @csrf
            <div class='col-md-8'>
              <table class='table table-condensed table-bordered'>
                <tbody>
                  <tr>
                      <th width='120px' scope='row'>Nip</th>
                      <td><input type='text' class='form-control' name='nip' placeholder="Nomor Induk Pegawai" value="{{$data->nip}}"></td>
                    </tr>
                  <tr><th scope='row'>Nama Lengkap</th><td><input type='text' class='form-control' name='nama' placeholder="Nama Lengkap" value="{{$data->nama}}"></td></tr>
                  <tr><th scope='row'>Tempat Lahir</th><td><input type='text' class='form-control' name='tempat_lahir' placeholder="Tempat Lahir" value="{{$data->tempat_lahir}}"></td></tr>
                  <tr><th scope='row'>Tanggal Lahir</th><td><input type='text' class='form-control' id="datepicker" name='tgl_lahir' placeholder="Tanggal Lahir" value="{{$data->tgl_lahir}}"></td></tr>
                  <tr><th scope='row'>Jenis Kelamin</th><td><select class='form-control' name='jenis_kelamin'> 
                    <option value="Laki-Laki" @if($data->jenis_kelamin == "Laki-Laki") selected @endif>Laki-Laki</option>
                    <option value="Perempuan" @if($data->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                  </select></td></tr>
                  <tr><th scope='row'>Agama</th><td><select class='form-control' name='agama'> 
                    <option value="Islam" @if($data->agama == "Islam") selected @endif>Islam</option>
                    <option value="Kristen" @if($data->agama == "Kristen") selected @endif>Kristen</option>
                    <option value="Katolik" @if($data->agama == "Katolik") selected @endif>Katolik</option>
                    <option value="Hindu" @if($data->agama == "Hindu") selected @endif>Hindu</option>
                    <option value="Buddha" @if($data->agama == "Buddha") selected @endif>Buddha</option>
                  </select></td></tr>

                  <tr><th scope='row'>No Telpon</th><td><input type='text' class='form-control' name='telepon' placeholder="Nomor HP/Telepon" value="{{$data->telepon}}"></td></tr>
                  <tr><th scope='row'>Alamat Email</th><td><input type='text' class='form-control' name='email' placeholder="Email" value="{{$data->email}}"></td></tr>
                  <tr><th scope='row'>Alamat</th><td><textarea name='alamat' class='form-control' placeholder="Alamat Lengkap" rows="4">{{$data->alamat}}</textarea></td></tr>
                  <tr><th scope='row'>Jabatan</th><td><input type='text' class='form-control' name='jabatan' placeholder="Jabatan" value="{{$data->jabatan}}"></td></tr>
                  <tr><th scope='row'>Foto</th><td><input type='file' class='form-control' name='image'></td></tr>
                </tbody>
              </table>
            </div>

            <div style='clear:both'></div>
            <div class='box-footer'>
                <input type="hidden" name="id" value="{{$data->id}}">
              <button type='submit' class='btn btn-info'>Update</button>
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