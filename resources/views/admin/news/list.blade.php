
@extends('admin.layout.index')
@section('content')

	


	</div>
	<div class="page-content">




		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->



				<div class="row">
					<div class="col-xs-12">
						<h3 class="header smaller lighter blue">Quản lí loại tin</h3>


						<div class="table-header">
							Danh sách
						</div>

						<!-- div.table-responsive -->

						<!-- div.dataTables_borderWrap -->
						



						<div>

							<table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
								<thead>
									<tr role="row">
										
										<th >
											ID
										</th>
										<th >
											Loại tin 
										</th>
										<th >
											name
										</th>
										
										
										<!-- <th >
											Tóm tắt
										</th>
										<th >
											Nội dung
										</th> -->
										
										<th >
											Lượt xem
										</th>
										<th >
											Ngày tạo
										</th>
										
										<th >
										
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
										{{$value->typeofnews->name}}
									</td>
									<td>
										{{$value->name}}<br>
										<img src="upload/news/{{$value->imager}}" alt="" style="width: 100px" >
									</td>
									
									<!-- <td >
										<textarea name="" id="" cols="10" rows="10">
											{{$value->brief}}
										</textarea>
									</td>
									<td >
										<textarea name="" id="" cols="10" rows="10">
											{{$value->content}}
										</textarea>
									</td> -->
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