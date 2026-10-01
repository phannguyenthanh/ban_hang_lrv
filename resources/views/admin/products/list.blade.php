
@extends('admin.layout.index')
@section('content')

	


	</div>
	<div class="page-content">




		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->



				<div class="row">
					<div class="col-xs-12">
						<h3 class="header smaller lighter blue">Quản lí Sản phẩm</h3>


						<div class="table-header">
							Danh sách
						</div>

						<!-- div.table-responsive -->

						<!-- div.dataTables_borderWrap -->
						<div>
							<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
								<div class="row">
									<div class="col-xs-6">
										<div class="dataTables_length" id="dynamic-table_length">
										<!-- <label>
											Hiển thị 
											<select name="dynamic-table_length" aria-controls="dynamic-table" class="form-control input-sm">
												<option value="10">
													10
												</option>
												<option value="25">
													25
												</option>
												<option value="50">
													50
												</option>
												<option value="100">
													100
												</option>
											</select>
											Dòng
										</label> -->
									</div>
								</div>
								<div class="col-xs-6">
									<div id="dynamic-table_filter" class="dataTables_filter">
										<label>
											Search:
											<input type="search" class="form-control input-sm" placeholder="" aria-controls="dynamic-table">
										</label>
									</div>
								</div>
							</div>





							<table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
								<thead>
									<tr role="row">
										
										<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">
											ID
										</th>
										<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">
											Loại sp
										</th>
										<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">
											name
										</th>
										
										<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">
											Giá
										</th>
										<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">
											tuổi
										</th>
										<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">
											Cao
										</th>
										<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">
											Rộng
										</th>
										
										<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">
											số lượng
										</th>
										<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">
											Lượt xem
										</th>
										<th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">
											Ngày tạo
										</th>
										
									<th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">
										
									</th>
									
								</tr>
							</thead>

							<tbody>




								
								@foreach ($table as $value)

								<tr role="row" class="odd">
									

									<td>
										{{$value->id}}
									</td>
									<td>
										{{$value->category->name}}
									</td>
									<td>
										{{$value->name}}<br>
										<img src="upload/product/{{$value->imager}}" alt="" style="width: 100px" >
									</td>
									
									<td >
										{{$value->price}}
									</td>
									<td >
										{{$value->old}}
									</td>
									<td >
										{{$value->height}}
									</td>
									<td >
										{{$value->width}}
									</td>
									
							
									<td >
										{{$value->quantity}}
									</td>
									<td >
										{{$value->views}}
									</td>
									<td >
										{{$value->created_at}}
									</td>
									
								
									
								
								
								
								
								
								
									<td>
										<div class="hidden-sm hidden-xs action-buttons">
											

											<a class="green" href="admin/{{$url_table}}/edit/{{$value->id}}">
												<i class="ace-icon fa fa-pencil bigger-130"></i>
											</a>

											<a class="red" href="admin/{{$url_table}}/remove/{{$value->id}}">
												<i class="ace-icon fa fa-trash-o bigger-130"></i>
											</a>
										</div>

										
									</td>

									
								</tr>
								@endforeach 
								
								
							</tbody>
						</table>
						<div class="row">
							<!-- <div class="col-xs-6">
								<div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">
									Showing 1 to 10 of 23 entries
								</div>
							</div> -->
							<div class="col-xs-6">
								<!-- <div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
									<ul class="pagination">
										<li class="paginate_button previous disabled" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_previous">
											<a href="#">
												Previous
											</a>
										</li>
										<li class="paginate_button active" aria-controls="dynamic-table" tabindex="0">
											<a href="#">
												1
											</a>
										</li>
										<li class="paginate_button " aria-controls="dynamic-table" tabindex="0">
											<a href="#">
												2
											</a>
										</li>
										<li class="paginate_button " aria-controls="dynamic-table" tabindex="0">
											<a href="#">
												3
											</a>
										</li>
										<li class="paginate_button next" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_next">
											<a href="#">
												Next
											</a>
										</li>
									</ul>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->












@endsection