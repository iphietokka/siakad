@extends('layouts.app')
@section('content')
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mata Pelajaran</h3>
                <a style='margin-right:5px' class='pull-right btn btn-primary btn-sm' href="#" data-toggle="modal" data-target="#tambah-data">
                    Tambahkan Mata Pelajaran
                </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">Kode Pelajaran</th>
                  <th class="text-center">Nama Pelajaran</th>
                  <th class="text-center">Guru</th>
                  <th class="text-center">KKM</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td class="text-center">{{$item->kode_kelas}}</td>
                        <td class="text-center">{{$item->nama}}</td>
                        <td class="text-center">{{$item->ruangan_id}}</td>
                        <td class="text-center">{{!empty ($item->guru->nama) ? $item->guru->nama : ''}}</td>
                        <td class="text-center">
                            <center>
                            <a class='btn btn-info btn-xs' title='Edit Siswa' href="{{ route('siswa.edit', $item->id) }}"><span class='glyphicon glyphicon-edit'></span></a>
                            <a class='btn btn-danger btn-xs' title='Delete Siswa' href='' data-toggle="modal" data-target="#delete_modal{{$item->id}}"><span class='glyphicon glyphicon-remove'></span></a>
                            </center>
                        </td>
                        <div class="modal fade" tabindex="-1" role="dialog" id="delete_modal{{$item->id}}">
                            <div class="modal-dialog modal-sm" role="document">
                              <div class="modal-content">
                                <div class="modal-body text-center">
                                  <div class="row">

                                 <h4 class="modal-heading">Are You Sure?</h4>
                                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                                          </div>
                                        </div>
                                <div class="modal-footer">
                                   <form class="form-horizontal" method="POST" action="{{route('siswa.delete',$item->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                     <button  data-dismiss="modal" class="btn btn-primary">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                                </form>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
             <div class="modal fade" id="tambah-data">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Pelajaran</h4>
              </div>
              <div class="modal-body">
                 <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pelajaran</label>
                  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email">
              </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kurikulum</label>
                  <select class="form-control" name="kurikulum_id">
                      <option value="">Pilih</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Kelompok</label>
                  <select name="kelompok_id" class="form-control" >
                      <option value="">Pilih</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pelajaran</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Guru Pengampu</label>
                  <select name="guru_id" class="form-control">
                      <option value="">Pilih</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Jam</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">KKM(Kriteria Ketuntasan Minimal)</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Status</label>
                  
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
@endsection
@section('scripts')
    <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection