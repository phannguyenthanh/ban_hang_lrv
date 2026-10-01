
@extends('admin.layout.index')
@section('content')



<div class="page-content">


	<div class="page-header">
		<h1>
			Quản lí Tài khoản
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Sua
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

			
			<form class="form-horizontal" action="admin/user/edit/{{$user->id}}" method="post" enctype="multipart/form-data" >
				<input type="hidden"  name="_token" value="{{csrf_token()}}" >
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"   for="form-field-1">Tên</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" name="name" value='{{$user->name}}' class="col-xs-10 col-sm-5">
					</div>
				</div>
					<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">họ</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" name="last_name" value='{{$user->last_name}}' class="col-xs-10 col-sm-5">
					</div>
				</div>
					<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Email</label>

					<div class="col-sm-9">
						<input type="email" id="form-field-1" name="email" value='{{$user->email}}' readonly="" class="col-xs-10 col-sm-5">
					</div>
				</div>
					<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">password</label>

					<div class="col-sm-9">
						<input type="password" id="form-field-1" name="password"  class="col-xs-10 col-sm-5">
					</div>
				</div>
				
					<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Nhạp lại password</label>

					<div class="col-sm-9">
						<input type="password" id="form-field-1" name="pass" class="col-xs-10 col-sm-5">
					</div>
				</div>
					<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Ngày sinh</label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1" name="birthday"  value='{{$user->birthday}}' class="col-xs-10 col-sm-5">
					</div>
				</div>
					<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Giới tính</label>

					<div class="col-sm-9">
						<!-- <input type="text" id="form-field-1" 
 name="name" class="col-xs-10 col-sm-5"> -->
						<select name="sex" id="" class="col-xs-10 col-sm-5">
						<option value=""></option>

						
							<option value="0"
								<?php if ($user->sex==0): ?>
									selected
								<?php endif ?>

							>Nữ</option>
							<option value="1"
									<?php if ($user->sex==1): ?>
									selected
								<?php endif ?>
							>Nam</option>
						
						
						</select>
						
					</div>
				</div>
					<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Số điện thoại</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" name="phone" value='{{$user->phone}}' class="col-xs-10 col-sm-5">
					</div>
				</div>
					<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Địa chỉ</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" name="address" value='{{$user->address}}' class="col-xs-10 col-sm-5">
					</div>
				
			</div>
				<div class="form-group">
					<label class="col-sm-1 control-label no-padding-right"  for="form-field-1">Ảnh</label>

					<div class="col-sm-9">
						<img src="upload/user/{{$user->avatar}}" alt="" style="width:300px">
						<br>
						<input type="file" id="form-field-1" name="imager"  class="col-xs-10 col-sm-5">
					</div>
				</div>
				<div class="form-group">
					<label  class="col-sm-3 control-label no-padding-right"  ></label>
						<span class="lbl">tk admin :</span>
						
						<input name="admin" type="radio" value="1" class="ace"
								<?php if ($user->admin==1): ?>
									checked
								<?php endif ?> 
						>


						<span class="lbl">&#160 &#160 tk thường :</span>
						
						<input name="admin" type="radio" value="0" class="ace" 
						<?php if ($user->admin==0): ?>
									checked
								<?php endif ?> >
						<span class="lbl"></span>
					
						
					
				</div>
			
				
				


				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn btn-info" type="submid" >
							<i class="ace-icon fa fa-check bigger-110"></i>
							Submit
						</button>

						&nbsp; &nbsp; &nbsp;
						<a href="admin/user/list" class="btn">
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