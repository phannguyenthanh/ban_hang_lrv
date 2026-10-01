
@extends('admin.layout.index')
@section('content')



<div class="page-content">


	<div class="page-header">
		<h1>
			Quản lí Slider
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Thêm
			</small>
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">


			<!-- PAGE CONTENT BEGINS -->
			@if(count($errors) > 0)
			<div class="alert alert-danger ">
				@foreach($errors->all() as $value)
				{{$value}}<br>
				@endforeach
			</div>

			@endif 
			@if(session('thanhcong'))
			<div class="alert alert-success ">
				{{session('thanhcong')}}
			</div>
			@endif
			@if(session('loi'))
			<div class="alert alert-danger ">
				{{session('loi')}}
			</div>
			@endif

			
			<form class="form-horizontal" action="admin/{{$url_table}}/add" method="post" enctype="multipart/form-data" >
				<input type="hidden"  name="_token" value="{{csrf_token()}}" >
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Tên</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" name="name" class="col-xs-10 col-sm-5">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Ảnh</label>

					<div class="col-sm-9">
						<input type="file" id="form-field-1" name="imager" class="col-xs-10 col-sm-5">
					</div>
				</div>
				
				

				


				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn btn-info" type="submid" >
							<i class="ace-icon fa fa-check bigger-110"></i>
							Submit
						</button>

						&nbsp; &nbsp; &nbsp;
						<a href="admin/{{$url_table}}/list" class="btn">
							<i class="ace-icon fa fa-undo bigger-110"></i>
							Quay lại
						</a>
					</div>
				</div>


			</form>


		</div><!-- /.col -->
	</div><!-- /.row -->
</div>




@endsection