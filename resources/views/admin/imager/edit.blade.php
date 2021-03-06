
@extends('admin.layout.index')
@section('content')


<span class="box pos-demo"></span>
<div class="page-content">


	<div class="page-header">
		<h1>
			Quản lý loại sản phẩm
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Chỉnh sửa
			</small>
			
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			 
			 	<!-- <div class="aler_notify" style=""></div> -->
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
			
			<form class="form-horizontal" action="admin/category/edit/{{$category->id}}" method="POST" >
				{{ csrf_field() }}
			
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"  for="form-field-1">Tên</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Tên" name="name" value="{{$category->name}}"  class="col-xs-10 col-sm-5">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"  for="form-field-1">Menu</label>

					<div class="col-sm-9">
						<!-- <input type="text" id="form-field-1" placeholder="Tên" name="name" class="col-xs-10 col-sm-5"> -->
						<select name="menu" id="" class="col-xs-10 col-sm-5">
						<!-- <option value=""></option> -->

						<?php foreach ($menu as $key => $value): ?>
							<option value="{{$value->id}}"
							@if($category->menu_id==$value->id)
							selected
							@endif

								>{{$value->name}}</option>
							
						<?php endforeach ?>
						
						</select>
						
					</div>
				</div>
				
	
				


				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn btn-info" type="submid" >
							<i class="ace-icon fa fa-check bigger-110"></i>
							Submit
						</button>

						&nbsp; &nbsp; &nbsp;
						<a href="admin/category/list" class="btn">
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