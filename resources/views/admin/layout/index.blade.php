<!DOCTYPE html>
<html lang="en">
<head>

	@include('admin.layout.block.head_link')
	<!-- <title>admin</title> -->
	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		
<script src="admin/assets/js/html5shiv.min.js"></script>
		
<script src="admin/assets/js/respond.min.js"></script>
<![endif]-->
</head>

<body class="no-skin">
	@include('admin.layout.block.navbar')

	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try{ace.settings.loadState('main-container')}catch(e){}
		</script>

		


		@include('admin.layout.block.menu')



		<div class="main-content">
			<div class="main-content-inner">
				@yield('content')
			</div>

			
		</div>
		



		


		@include('admin.layout.block.footer')


	</div><!-- /.main-container -->

	<!-- basic scripts -->
	@include('admin.layout.block.footer_link')
	<!--[if !IE]> -->


</body>
</html>
