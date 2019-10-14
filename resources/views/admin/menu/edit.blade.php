
@extends('admin.layout.index')
@section('content')



<div class="page-content">


	<div class="page-header">
		<h1>
			Quản lý menu
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Chỉnh sửa
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
			
			<form class="form-horizontal" action="admin/menu/edit/{{$menu->id}}" method="POST" >
				{{ csrf_field() }}
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Tên</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Tên" value="{{$menu->name}}" name="name"  class="col-xs-10 col-sm-5">
					</div>
				</div>
				<!-- <div class="form-group">
					<label  class="col-sm-1 control-label no-padding-right"  ></label>
						<span class="lbl">Hiển thị :</span>
						
						<input value="1" name="display" type="radio" class="ace"
							@if($menu->display==1)
								{{'checked'}}
							@endif
						>


						<span class="lbl">&#160 &#160 Không hiển thị :</span>
						
						<input value="0" name="display" type="radio"  class="ace"
							@if($menu->display==0)
								{{'checked'}}
							@endif
						>
						<span class="lbl"></span>
					
						
					
				</div> -->
				


				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn btn-info" type="submid" >
							<i class="ace-icon fa fa-check bigger-110"></i>
							Submit
						</button>

						&nbsp; &nbsp; &nbsp;
						<a href="admin/menu/list" class="btn">
							<i class="ace-icon fa fa-undo bigger-110"></i>
							Quay về
						</a>
					</div>
				</div>


			</form>


		</div><!-- /.col -->
	</div><!-- /.row -->
</div>




@endsection