

@extends('admin.layout.index')
@section('content')



<div class="page-content">


	<div class="page-header">
		<h1>
			Quản lý sản phẩm
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Sửa
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

			
			<form class="form-horizontal" action="admin/products/edit/{{$products->id}}" method="post" enctype="multipart/form-data" >
				<input type="hidden"  name="_token" value="{{csrf_token()}}" >
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Tên</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" name="name" value="{{$products->name}}" class="col-xs-10 col-sm-5">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Loại sản phẩm</label>

					<div class="col-sm-9">
						<!-- <input type="text" id="form-field-1" 
 name="name" class="col-xs-10 col-sm-5"> -->
						<select name="category_id" id="" class="col-xs-10 col-sm-5">
						<option value=""></option>

						@foreach ($category as $key => $value)
							<option value="{{$value->id}}"
									
									@if($value->id==$products->category_id)
										selected
									@endif 

								>{{$value->name}}</option>
						@endforeach
						
						</select>
						
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Ảnh</label>

					<div class="col-sm-9">
						<img src="upload/product/{{$products->imager}}" alt="" style="width:500px">
						<br>
						<input type="file" id="form-field-1" name="imager"  value="{{$products->imager}}" class="col-xs-10 col-sm-5">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Giá</label>

					<div class="col-sm-9">
						<input type="number" id="form-field-1" name="price"   value="{{$products->price}}"  class="col-xs-10 col-sm-5">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Tuổi</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" name="old"  value="{{$products->old}}" class="col-xs-10 col-sm-5">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Cao</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" name="height"  value="{{$products->height}}" class="col-xs-10 col-sm-5">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Rộng</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" name="width"  value="{{$products->width}}" class="col-xs-10 col-sm-5">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Đạc điểm</label>

					<div class="col-sm-9">
						<textarea name="charac" id="" cols="30"   rows="10">{{$products->charac}}</textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Khái quát</label>

					<div class="col-sm-9">
						<textarea name="general" id="" cols="30"   rows="10">{{$products->general}}</textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Nội dung</label>

					<div class="col-sm-9">
						<textarea name="content" id="editorofch" cols="30"   rows="10">{{$products->content}}</textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"   for="form-field-1">Số lượng</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" name="quantity"  value="{{$products->quantity}}" class="col-xs-10 col-sm-5">
					</div>
				</div

				


				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn btn-info" type="submid" >
							<i class="ace-icon fa fa-check bigger-110"></i>
							Submit
						</button>

						&nbsp; &nbsp; &nbsp;
						<a href="admin/products/list" class="btn">
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