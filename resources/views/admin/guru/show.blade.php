@extends('layouts.app')
@section('content')
<section class="content">
  <div class="row">
    <div class='col-md-12'>
            <div class='box box-info'>
              <div class='box-header with-border'>
                <h3 class='box-title'>Detail Data Guru</h3>
              </div>
              <div class='box-body'>
                  <form method='POST' class='form-horizontal' action='' enctype='multipart/form-data'>
                <div class='col-md-7'>
                  <table class='table table-condensed table-bordered'>
                    <tbody>
                      <tr><th style='background-color:#E7EAEC' width='160px' rowspan='25'>
                        <img class='img-thumbnail' style='width:155px' src="{{$data->image!='' && File::exists('image/guru/'.$data->image)?'/image/guru/'.$data->image:'/image/no-image.jpg'}}">
                        <a href="{{ route('guru.edit', $data->id) }}" class='btn btn-success btn-block'>Edit Profile</a>
                       </th>
                      </tr>
                      <tr><th width='120px' scope='row'>Nip</th><td>{{$data->nip}}</td></tr>
                      <tr><th scope='row'>Nama Lengkap</th><td>{{$data->nama}}</td></tr>
                      <tr><th scope='row'>Jabatan</th><td>{{$data->jabatan}}</td></tr>
                      <tr><th scope='row'>Tempat Lahir</th><td>{{$data->tempat_lahir}}</td></tr>
                      <tr><th scope='row'>Tanggal Lahir</th><td>{{$data->tgl_lahir}}</td></tr>
                      <tr><th scope='row'>Jenis Kelamin</th><td>{{$data->jenis_kelamin}}</td></tr>
                      <tr><th scope='row'>Agama</th><td>{{$data->agama}}</td></tr>
                      <tr><th scope='row'>No Telpon</th><td>{{$data->telepon}}</td></tr>
                      <tr><th scope='row'>Alamat Email</th><td>{{$data->email}}</td></tr>
                      <tr><th scope='row'>Alamat</th><td>{{$data->alamat}}</td></tr>
                    </tbody>
                  </table>
                </div>

                <div class='col-md-5'>
                  <table class='table table-condensed table-bordered'>
                    <tbody>
                    </tbody>
                  </table>
                </div> 
              </div>
            </form>
          </div>
</div>
</section>
@endsection