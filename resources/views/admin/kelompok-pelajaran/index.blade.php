@extends('layouts.app')
@section('content')
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kelompok Pelajaran</h3>
                <a style='margin-right:5px' class='pull-right btn btn-primary btn-sm' href="#" data-target="#tambah-data" data-toggle="modal">
                    Tambahkan Kelompok Pelajaran
                </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">Jenis</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td class="text-center">{{$item->jenis}}</td>
                        <td class="text-center">{{$item->nama}}</td>
                        <td class="text-center">
                            <center>
                            <a class='btn btn-info btn-xs' title='Edit Siswa' href="#" data-toggle="modal" data-target="#edit_modal{{$item->id}}"><span class='glyphicon glyphicon-edit'></span></a>
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
                                   <form class="form-horizontal" method="POST" action="{{route('kelompok-pelajaran.delete', $item->id) }}">
                                    @csrf
                                    @method('delete')
                                     <button  data-dismiss="modal" class="btn btn-primary">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                                </form>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                    </tr>
          <div class="modal fade" id="edit_modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form method="POST" action="{{route('kelompok-pelajaran.update',$item->id)}}" enctype="multipart/form-data">
                            @csrf

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-name" id="myModalLabel">Edit Data {{ $item->nama}}</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Nama Kelompok</label>
                      <div class="row">
                        <div class="col-sm-6">
                        	 <input type="hidden" name="id" value="{{$item->id}}">
                         <input class="form-control" name="nama"  value="{{ $item->nama}}">
                        </div>
                      </div>
                    </div>
                     <div class="form-group">
                      <label>Jenis Kelompok</label>
                      <div class="row">
                        <div class="col-sm-6">
                         <input class="form-control" name="jenis"  value="{{ $item->jenis}}">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
              </form>
            </div>
          </div>
        </div>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
           <div class="modal fade" id="tambah-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form method="POST" action="{{route('kelompok-pelajaran.store')}}" enctype="multipart/form-data">
                            @csrf

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-name" id="myModalLabel">Tambah Data</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Nama Kelompok</label>
                      <div class="row">
                        <div class="col-sm-6">
                         <input class="form-control" name="nama"  placeholder="Nama Kelompok">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelompok</label>
                      <div class="row">
                        <div class="col-sm-6">
                         <input class="form-control" name="jenis"  placeholder="Jenis Kelompok">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
              </form>
            </div>
          </div>
        </div>
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