@extends('layouts.app')
@section('content')
<section class="content">
	<div class="row" id="perusahaan">
		<div class="col-xs-12">
			<div class="box">
				<!-- /.box-header -->
				@foreach($data as $dt)
				<div class="box-body">
					<form method="POST" enctype="multipart/form-data" action="{{route('sekolah.update',$dt->id)}}">
						@csrf
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label>Nama Sekolah</label>
											<input type="hidden" name="id" value="{{$dt->id}}">
											<input class="form-control" name="nama" value="{{$dt->nama}}">
										</div>
									</div>
								</div>
                            </div>
                            <div class="col-sm-12">
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label>NPSN</label>
											<input class="form-control" name="npsn" value="{{$dt->npsn}}">
										</div>
										<div class="col-sm-6">
											<label>NSS</label>
											<input class="form-control" name="nss" value="{{$dt->nss}}">
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label>Alamat</label>
											<textarea class="form-control" name="alamat" rows="3">{{$dt->alamat}}</textarea>
                                        </div>
                                    <div class="col-sm-6">
											<label>Telepon</label>
											<input class="form-control" name="telepon" value="{{$dt->telepon}}">
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label>Website</label>
											<input class="form-control" name="website"  value="{{$dt->website}}">
										</div>
										<div class="col-sm-6">
											<label>Email</label>
											<input type="email" class="form-control" name="email" value="{{$dt->email}}">

										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<button type="submit" class="btn btn-primary pull-right">Update</button>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>

		</div>

	</section>
	@endsection
