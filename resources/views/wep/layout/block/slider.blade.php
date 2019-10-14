
<div class="slider-full-width">
	<div class="post-slider  text-center vertical-align">

		<div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-1583px, 0px, 0px);">
	


                        <?php if (isset($slider)): ?>
                        	<?php foreach ($slider as $key => $value): ?>
                        	


                           

									<li class="" style="width: 1583px; float: left; display: block;height:600px">
			<img src="upload/slider/{{$value->imager}}" alt="image01"   style="height: 100%!important" >
			<!-- <div class="caption">Service Anytime</div> -->

		</li>
                          
                        
                        	<?php endforeach ?>
                        	
                        <?php endif ?>




	</ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
	</div>