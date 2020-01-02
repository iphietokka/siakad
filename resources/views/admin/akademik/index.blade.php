@extends('layouts.app')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <button class="btn btn-info" data-toggle="modal" data-target="#tambah-data">Tambah Tahun Akademik</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>#</th>
                  <th>Nama Tahun</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
					@foreach($data as $user)
					<tr>
            <td>{{$loop->iteration}}</td>
						<td>{{$user->nama}}</td>
						<td>{!!$user->status?"<i  style='color:green' class='fa fa-check'></i>":"<i style='color: red'
							class=' fa fa-close'></i>"!!}</td>
						<td>
                        <a href="" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit_modal{{$user->id}}"> <i class="fa fa-edit"></i> Edit</a>
					    <a href="" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_modal{{$user->id}}"><i class="fa fa-trash"></i> Delete</a>
						</td>
					</tr>
					<div class="modal fade" tabindex="-1" role="dialog" id="delete_modal{{$user->id}}">
                            <div class="modal-dialog modal-sm" role="document">
                              <div class="modal-content">
                                <div class="modal-body text-center">
                                  <div class="row">

                                 <h4 class="modal-heading">Are You Sure?</h4>
                                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                                          </div>
                                        </div>
                                <div class="modal-footer">
                                   <form class="form-horizontal" method="POST" action="{{route('akademik.delete',$user->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                     <button type="reset" class="btn btn-primary">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                                </form>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->

                           <div class="modal fade" id="edit_modal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form method="POST" action="{{route('akademik.update',$user->id)}}" enctype="multipart/form-data">
                            @csrf

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-name" id="myModalLabel">Edit Data {{ $user->nama}}</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Tahun Akademik</label>
                      <div class="row">
                        <div class="col-sm-6">
                        	 <input type="hidden" name="id" value="{{$user->id}}">
                         <input class="form-control" name="nama"  value="{{ $user->nama}}">

                        </div>
                         <div class="col-sm-6">
                          <label>Status</label>
                           <input type="hidden" name="status" value=0>
                           <input type="checkbox" name="status" @if($user->status) checked @endif value="1" >
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
        </div>
        <!-- /.col -->
         <!-- Modal Tambah Data -->
        <div class="modal fade" id="tambah-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
             <form method="POST" action="{{route('akademik.store')}}" enctype="multipart/form-data">
				@csrf

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-name" id="myModalLabel">Tambah Data</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Nama Tahun</label>
                      <div class="row">
                        <div class="col-sm-6">
                         <input class="form-control" name="nama" placeholder="Enter Name">

                        </div>
                        
                        <div class="col-sm-6">
                          <label>Active</label>
                          <input type="hidden" name="status" value=0>
                        	<input type="checkbox" name="status" value=1>

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

        <!-- Model Edit -->
      </div>
      <!-- /.row -->
    </section>
@endsection

@section('scripts')
<script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection